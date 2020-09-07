<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/8/21 0021
 * Time: 16:10
 */

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use App\Services\RedisService;

//服务基类
class BaseService
{
    /**
     * Eloquentmo模型
     * @var Model
     */
    public $model;

    /**
     * 主键名
     * @var string
     */
    public $idKey;

    /**
     * 唯一标识键名
     * @var string
     */
    public $uniqueKey;

    /**
     * 唯一标识值
     * @var string
     */
    public $uniqueValue;

    /**
     * 查询关联关系数组
     * @var array
     */
    public $with;

    /**
     * 所有关联关系，插入redis时使用
     * @var array
     */
    public $withAll;

    /**
     * 排序字符串
     * @var string
     */
    public $order;

    /**
     * 排序
     * @var string
     */
    public $sort;

    /**
     * 每页显示的条数
     * @var number
     */
    public $perPage;

    /**
     * 查询字段
     * @var array
     */
    public $field;

    /**
     * 查询条件
     * @var array
     */
    public $where = [];

    /**
     * 忽略查询条件强制读取redis数据
     * @var array
     */
    public $whereIgnore;

    /**
     * 表名
     * @var string
     */
    public $tableName;

    public $redis;

    /**
     * 初始化 设置唯一标识和redis键名
     * @param $model [模型实例]
     * @param string $uniqueKey [唯一键名]
     * @param string $uniqueValue [唯一键值]
     * @param string $idKey [主键名]
     * @param array $ignore
     */
    public function initialize($model, $uniqueKey = '', $uniqueValue = '', $idKey = 'id', $ignore = [])
    {
        //设置属性
        $this->model = $model;
        $this->uniqueKey = $uniqueKey;
        $this->uniqueValue = $uniqueValue;
        $this->idKey = $idKey;
        $this->order = $idKey;
        $this->sort = 'DESC';
        $this->redis = new RedisService($this->perPage);

        /* 获取表名 */
        $tableName = $model->getTable();

        // 设置强制忽略查询条件数组
        if ( !empty($ignore) ) {
            $this->whereIgnore($ignore);
        }

        /* 设置redis键名 */
        if ( !empty($uniqueKey) && !empty($uniqueValue) ) {
            if ( !empty($ignore) ) {
                $uniqueKey .= '_';
                foreach ($ignore as $key => $value) {
                    $uniqueKey .= $key . '_' . $value;
                }
            }
            $uniqueKey = ':' . $uniqueKey . ':' . $uniqueValue;
        } else {
            $uniqueKey = '';
        }
        $redisListKey = $tableName . $uniqueKey;//list列表键名
        $redisHashKey = $tableName . ':' . $idKey . ':';//hash键值

        $this->redis->key([ $redisListKey, $redisHashKey ], $idKey);

    }

    /**
     * 获取表所有字段
     * @return array             [表所有字段]
     *
     */
    public function getAllColumn()
    {
        $this->field = Schema::getColumnListing($this->model->getTable());

        return $this->field;
    }

    /**
     * 列表查询
     *
     * @param  boolean $pageFlag [是否分页]
     * @param  array   $idList   [查询指定主键的数据]
     * @return array             [数据和分页]
     */
    public function getList($pageFlag = true, $idList = [])
    {
        /* 接收参数 */
        $input = app('request')->input();

        /* 读取配置文件中的每页多少条数据参数 */
        $this->perPageJudge();

        /* 数据和分页 */
        $list     = [];
        $pageHtml = '';
        /* redis里没有任何数据 则将所有主键存入redis */
        $this->redisEmptyJudge();

        // 有强制忽略则将查询条件置空
        if ( !empty($this->whereIgnore) ) {
            $this->where = [];
        }

        /* 查询条件为空则读取redis数据 否则查询数据库 */
        if ( empty($this->where) ) {             /* redis分页 */
            if ( $pageFlag === false ) {
                if ( empty($idList) ) {

                    list($list, $pageHtml, $inexistenceIds) = $this->redis->getList();
                } else {

                    list($list, $pageHtml, $inexistenceIds) = $this->redis->getList(0, -1, $idList);
                }
            } else {

                list($list, $pageHtml, $inexistenceIds) = $this->redis->page();
            }

            /* 查询没有缓存的数据 */
            if (!empty($inexistenceIds) ) {

                /* 查询数据库 */
                $inexistenceList = $this->model->select($this->getField())->whereIn($this->idKey, $inexistenceIds)->orderBy($this->order,$this->sort)->get();
                if ( $this->withAll ) {
                    foreach ($this->withAll as $wv) {
                        $inexistenceList->load($wv);
                    }
                }
                $inexistenceList = $inexistenceList->toArray();

                /* 将数据写入redis */
                if ( !empty($this->withAll) ) {
                    $this->redis->update(function () use (&$inexistenceList) {
                        foreach ($inexistenceList as $key => $value) {
                            foreach ($this->withAll as $wev) {
                                if ( isset($value[$wev]) && is_array($value[$wev]) ) {
                                    $inexistenceList[$key][$wev] = json_encode($value[$wev]);
                                }
                            }
                        }
                        return $inexistenceList;
                    });
                } else {

                    $this->redis->update($inexistenceList);
                }

                /* 合并数组 */
                $list['data'] = array_merge($list['data'], $inexistenceList);

            }

        } else {

            /* 组装唯一标识并加入查询条件 */
            if ( !empty($this->uniqueKey) && !empty($this->uniqueValue) && empty($this->where[$this->uniqueKey]) ) {
                $this->where[$this->uniqueKey] = $this->uniqueValue;
            }

            /* 查询指定id */
            if ( count($idList) ) {
                $this->where[$this->idKey] = ['in', $idList];
            }

            /* 查询数据库并分页 */
            if ( $this->with ) {
                $list = $this->model->select($this->getField())->where($this->where)->orderBy($this->order,$this->sort);
                if ( $pageFlag === false ) {
                    $list = $list->get();
                    $pageHtml = '';
                } else {
                    $list = $list->paginate($this->perPage)->appends($input);
                    $pageHtml = $list->links();
                }
                foreach ($this->with as $wv) {
                    $list->load($wv);
                }

            } else {
                if ( $pageFlag === false ) {
                    $list = $this->model->select($this->getField())->where($this->where)->orderBy($this->order,$this->sort)->get();
                    $pageHtml = '';
                } else {
                    $list = $this->model->select($this->getField())->where($this->where)->orderBy($this->order,$this->sort)->paginate($this->perPage)->appends($input);
                    $pageHtml = $list->links();
                }
            }
            /* 转化整个模型集合为数组 */
            $list = $list->toArray();

        }

        /* 解析数据 */
        if ( isset($list['data']) && !empty($this->withAll) ) {

            foreach ($list['data'] as $k => $v) {
                foreach ($this->withAll as $wev) {
                    if ( isset($v[$wev]) && !is_array($v[$wev]) ) {
                        $list['data'][$k][$wev] = json_decode($v[$wev], true);
                    }
                }
            }
        } elseif ( !isset($list['data']) ) {

            $temp['data'] = $list;
            $list = $temp;
            unset($temp);
        }

        return [ $list, $pageHtml ];
    }

    /**
     * 单条数据查询
     * 1、读取redis数据
     * 2、第一步失败则查数据库并写入redis
     *
     * @param  integer $id [主键值]
     * @return array       [查询结果]
     */
    public function getInfo($id = -1)
    {
        if (empty($this->where)) {

            if ($this->redis->exists($id)) {
                // redis中存在该键 获取单条数据
                $info = $this->redis->getInfo($id);

                if (empty($info)) {
                    // 查询数据库
                    if (empty($this->withAll)) {
                        $info = $this->model->select($this->getField())->find($id);
                    } else {
                        $info = $this->model->select($this->getField())->with($this->withAll)->find($id);
                    }
                    if (!empty($info)) {
                        $info = $info->toArray();
                        $redisDatas = $info;
                        // 数据处理
                        if (!empty($this->withAll)) {
                            foreach ($this->withAll as $value) {
                                if (isset($redisDatas[$value]) && is_array($redisDatas[$value])) {
                                    $redisDatas[$value] = json_encode($redisDatas[$value]);
                                }
                            }
                        }
                        // 将数据写入redis
                        $this->redis->update($redisDatas);
                    } else {
                        return [];
                    }
                } else {
                    // 数据处理
                    if (!empty($this->withAll)) {

                        foreach ($this->withAll as $value) {
                            if (isset($info[$value])) {
                                $info[$value] = json_decode($info[$value], true);
                            }
                        }
                    }

                }
            } else {
                // redis里没有对应键值 则查询数据库
                if (empty($this->withAll)) {
                    $info = $this->model->select($this->getField())->find($id);
                } else {
                    $info = $this->model->select($this->getField())->with($this->withAll)->find($id);
                }

                if (!empty($info)) {
                    // redis里没有任何数据 则将所有主键存入redis
                    $this->redisEmptyJudge();

                    $info = $info->toArray();
                    $redisDatas = $info;
                } else {
                    return [];
                }

                // 数据处理
                if (!empty($this->withAll)) {
                    foreach ($this->withAll as $value) {
                        if (isset($redisDatas[$value]) && is_array($redisDatas[$value])) {
                            $redisDatas[$value] = json_encode($redisDatas[$value]);
                        }
                    }
                }

                $this->redis->update([$redisDatas]);
            }
        } else {

            $info = $this->model->select($this->getField())->where($this->where)->first();

            if (!empty($info)) {
                $info = $info->toArray();
            } else {
                return [];
            }
        }


        return $info;
    }

    /**
     * 更新redis缓存数据
     * 支持多条更新和单条更新
     * 多条记录更新需要把所有字段传入
     * 防止失误更新整表 必须加条件更新
     *
     * @param  array  $datas [要更新的数据数组]
     *
     * @return boolean [成功true，失败false]
     *
     */
    public function update($datas)
    {
        if ( is_array(current($datas)) ) {
            // batch
            foreach ($datas as $key => $value) {
                $save = $this->model->where($this->where)->update($value);
                if ( !$save ) {
                    return false;
                }
                if ( !empty($this->withAll) ) {
                    foreach ($this->withAll as $wev) {
                        if ( isset($value[$wev]) && is_array($value[$wev]) ) {
                            $datas[$key][$wev] = json_encode($value[$wev]);
                        }
                    }
                }
            }
            $redisDatas = $datas;
            $redisField = [];
        } else {
            // only one
            if ( empty($this->where) ) {
                // 防止失误更新整表 必须加条件更新
                return false;
            }
            $save = $this->model->where($this->where)->update($datas);
            if ( !$save ) {
                return false;
            }
            if ( !empty($this->withAll) ) {
                foreach ($this->withAll as $wev) {
                    if ( isset($datas[$wev]) && is_array($datas[$wev]) ) {
                        $datas[$wev] = json_encode($datas[$wev]);
                    }
                }
            }
            $redisDatas = isset($this->where[$this->idKey]) ? $this->where[$this->idKey] : $datas[$this->idKey];
            $redisField = $datas;
        }

        if ( $save ) {
            // 更新redis
            $this->redis->update($redisDatas, $redisField);

            return true;
        }

        return false;
    }

    /**
     * 更新数据库，仅支持单条记录更新
     * @param  array  $datas     [要更新的数据数组]
     * @return boolean [更新成功则返回true，更新失败返回false]
     */
    public function updateD($datas, $ajaxFlag = true)
    {
        // 防止失误更新整表 必须加条件更新
        if ( empty($this->where) ) {
            $ajaxFlag && error();
            return false;
        }

        $dbResult = $this->model->where($this->where)->update($datas);

        return $this->dealDbResult($dbResult, $ajaxFlag);
    }

    /**
     * 更新redis缓存数据
     * 支持多条更新和单条更新
     * 多条记录更新需要把所有字段传入
     *
     * @param  array|string  $datas    [要更新redis缓存数据数组 - 每条必须包含主键 | 一个闭包 | 字符串 - 更新数据的id ]
     * 数组示例：更新商品1，商品2，商品3的数据
     * $datas = [
     *     [ 'id' => '1', 'title' => '商品1', 所有字段要写全... ],
     *     [ 'id' => '2', 'title' => '商品2', 所有字段要写全... ],
     *     [ 'id' => '3', 'title' => '商品3', 所有字段要写全... ]
     * ];
     *
     *
     * 字符串示例： 要将商品id为1的商品的标题更新为商品2，库存更新为5000
     * $datas = '1';
     * $field = [
     *     'title' => '商品2',
     *     'stock' => 5000
     * ];
     * @return boolean
     */
    public function updateR($datas, $field = [])
    {
        if ( !empty($this->withAll) ) {
            if ( is_array($datas) ) {
                foreach ($datas as $key => $value) {
                    foreach ($this->withAll as $wev) {
                        if ( isset($value[$wev]) && is_array($value[$wev]) ) {
                            $datas[$key][$wev] = json_encode($value[$wev]);
                        }
                    }
                }
            } else {
                foreach ($this->withAll as $wev) {
                    if ( isset($field[$wev]) && is_array($field[$wev]) ) {
                        $field[$wev] = json_encode($field[$wev]);
                    }
                }
            }
        }

        $this->redis->update($datas, $field);

        $ajaxFlag && success();
        return true;
    }


    /**
     * 插入数据库 并返回主键
     * @param  array  $data [要插入的数据]
     */
    public function addD($data)
    {
        return $this->model->insertGetId($data);
    }

    /**
     * 插入redis
     * @param  array  $data [要插入的数据]
     */
    public function addR($data)
    {
        if ( !empty($this->withAll) ) {
            foreach ($this->withAll as $value) {
                if ( isset($data[$value]) && is_array($data[$value]) ) {
                    $data[$value] = json_encode($data[$value]);
                }
            }
        }

        $this->redis->save([$data]);

        return true;
    }

    /**
     * 插入db和redis
     *
     * @param  array  $datas [要插入的数据]
     *
     * 批量插入（二维数组）
     * $datas = [
     *     [ 'id' => '1', 'title' => '商品1', 所有字段要写全... ],
     *     [ 'id' => '2', 'title' => '商品2', 所有字段要写全... ],
     *     [ 'id' => '3', 'title' => '商品3', 所有字段要写全... ]
     * ];
     *
     *
     * 单条记录插入（一维数组）
     * $datas = [
     *     'title' => '商品2',
     *     'stock' => 5000,
     *     所有字段要写全...
     * ];
     *
     * @return array 单条记录插入失败返回false，批量插入返回失败是第几条数据插入失败，插入成功返回id或id数组
     *
     */
    public function add($datas) {

        if ( is_array(current($datas)) ) {
            // batch 事务没写！！！
            $datas = array_values($datas);
            foreach ($datas as $key => $value) {
                $id[$key] = $this->model->insertGetId($value);
                if ( $id[$key] === false ) {
                    return $key;
                }
            }
            $query = $this->model->whereIn($this->idKey, $id)->get();
        } else {
            // only one
            $id = $this->model->insertGetId($datas);
            if ( $id === false ) {
                return false;
            }
            $query = $this->model->where($this->idKey, $id)->get();
        }

        if ( !empty($this->withAll) ) {
            foreach ($this->withAll as $val) {
                $query->load($val);
            }
        }
        $redisDatas = $query->toArray();

        foreach ($redisDatas as $k => $val) {
            if ( !empty($this->withAll) ) {
                foreach ($this->withAll as $v) {
                    if ( !isset($redisDatas[$k][$v]) ) {
                        $redisDatas[$k][$v] = json_encode([]);
                    } else {
                        $redisDatas[$k][$v] = json_encode($redisDatas[$k][$v]);
                    }
                }
            }
        }
        // 插入redis
        $this->redis->save($redisDatas);

        return $id;
    }

    /**
     * 删除db+redis
     * @param  [integer|string|array] $id [要删除数据的主键值或主键值数组]
     * @return boolean 删除成功则true，删除失败返回false]
     */
    public function delete($id)
    {
        if ( empty($this->where) ) {
            $this->where[$this->idKey] = $id;
        }

        $dbResult = $this->deleteD();

        $dbResult && $dbResult = $this->deleteR($id);

        return $dbResult;
    }

    /**
     * 删除db
     * @return boolean [删除成功则true，删除失败返回false]
     */
    public function deleteD()
    {
        if ( empty($this->where) ) {
            return false;
        }

        $dbResult = $this->model->where($this->where)->delete();

        return $dbResult;
    }

    /**
     * 删除redis
     *
     * @param  [integer|string|array] $id [要删除数据的主键值或主键值数组]
     *
     * @return boolean [删除成功则true，删除失败返回false]
     */
    public function deleteR($id)
    {
        if ( !$this->redis->exists($id) ) {
            return true;
        }

        $dbResult = $this->redis->delete($id);

        return boolval($dbResult);
    }


    /**
     * db+redis自增
     *
     * @param  integer $id       [主键值]
     * @param  string  $field    [自增字段名]
     * @param  mixed   $num      [增量，支持整型和浮点型]
     * @return [type]            [description]
     */
    public function increment($id, $field, $num = 1)
    {
        if ( empty($id) ) {
            if ( empty($this->where) ) {
                return false;
            }
            $id = $this->model->where($this->where)->value($this->idKey);
        } else {
            $this->where[$this->idKey] = $id;
        }

        $dbResult = $this->incrementD($id, $field, false, $num);

        if ( $dbResult ) {
            return $this->incrementR( $id, $field, $ajaxFlag, $num );
        }

        return false;
    }

    /**
     * db自增自减
     *
     * @param  integer $id       [主键值]
     * @param  string  $field    [自增字段名]
     * @param  mixed   $num      [增量，支持整型和浮点型，支持负数自减]
     * @return [type]            [description]
     */
    public function incrementD($id, $field, $num = 1)
    {
        $this->where[$this->idKey] = $id;

        $dbResult = $this->model->where($this->where)->increment($field, $num);

        return $dbResult;
    }


    /**
     * redis自增自减
     *
     * @param  integer $id       [主键值]
     * @param  string  $field    [自增字段名]
     * @param  mixed   $num      [增量，支持整型和浮点型，支付负数自减]
     * @return [type]            [description]
     */
    public function incrementR($id, $field, $num = 1)
    {
        $dbResult = $this->redis->increment($id, $field, $num);

        if ( $dbResult !== false ) {
            return $dbResult;
        }

        return false;
    }

    /**
     * 设置查询字段
     *
     * @param  array|mixed  $columns [字段名]
     *
     * @return $this
     */
    public function getField()
    {
        if ( empty($this->field) ) {
            $this->field = $this->getAllColumn();
        }

        return $this->field;
    }


    /**
     * 设置查询条件
     * @param  array  $where [条件数组]
     *
     * @return $this
     */
    public function where(array $where)
    {
        $this->where = $where;

        return $this;
    }

    /**
     * 设置排序字符串
     * @param  string  $order [排序字符串]
     *
     * @return $this
     */
    public function orderBy($order,$sort)
    {
        $this->order = $order;
        $this->sort = $sort;

        return $this;
    }

    /**
     * 设置关联关系
     * @param  array  $with [关联关系名称]
     *
     * @return $this
     */
    public function with($with)
    {
        $this->with = $with;

        return $this;
    }

    /**
     * 设置页数
     * @param  string  $perPage [每页数据条数]
     *
     * @return $this
     */
    public function perPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * 查询前页数判断
     *
     * 已设置则知道redis页数
     * 未设置则读取配置文件中的每页多少条数据参数（redis默认也会读取配置文件中的每页多少条数据参数，故不需要再单独设置）
     *
     * @return $this
     */
    public function perPageJudge()
    {
        if ( $this->perPage ) {
            $this->redis->per($this->perPage);
        } else {
            $this->perPage = config('database')['perPage'];
        }

        return $this;
    }

    /**
     * redis数据为空的情况处理
     *
     * redis里没有任何数据 则将所有主键存入redis
     * 否则不进行任何操作
     *
     * @return $this
     */
    public function redisEmptyJudge()
    {
        if ( !$this->redis->count() ) {
            $wherePush = [];
            if ( !empty($this->whereIgnore) ) {
                $wherePush = $this->whereIgnore;
            }
            if ( !empty($this->uniqueKey) && !empty($this->uniqueValue) && empty($wherePush[$this->uniqueKey]) ) {
                $wherePush[$this->uniqueKey] = $this->uniqueValue;
            }
            $this->model->select([$this->idKey])->where($wherePush)->orderBy($this->order,$this->sort)->chunk(100, function($totalIds) {
                $this->redis->push($totalIds);
            });
        }

        return $this;
    }

}