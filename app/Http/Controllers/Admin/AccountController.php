<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AccountRequest;
use App\Http\Requests\Admin\RoleRequest;
use App\Services\Staff\AccountService;
use App\Services\Staff\RoleService;
use App\Services\Staff\MenuService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use AccountLogService;
use App\Models\AccountLog;

//后台管理员控制器
class AccountController extends Controller
{
    //管理员列表
    public function index(AccountRequest $request, AccountService $accountService)
    {
        list($accountList, $page) = $accountService->init()->getList(true);

        print_r($accountList);exit;
        return view('system.account.index', [
            'page' => $page,
            'list' => $accountList
        ]);
    }

    //添加管理员
    public function createAccount(AccountRequest $request, AccountService $accountService, RoleService $roleService)
    {
        if ($request->isMethod('POST')) {

            $input = $request->input();

            $data = [
                'login_name' => $input['login_name'],
                'role_id' => $input['role_id'],
                'password' => bcrypt($input['password']),
                'user_name' => $input['user_name'],
                'updated_at' => get_current_time(),
                'created_at' => get_current_time(),
            ];

            $result = $accountService->init()->add($data, false);

            if ($result) {
                //写入日志
                AccountLogService::write('添加管理员',$data);

                return showMessage('添加成功', url('admin/accounts'));
            } else {
                return showMessage('添加失败');
            }
        } else {

            //获取角色
            $roles = $roleService->init()->select(['id', 'role_name'])->getList(false);

            return view('system.account.create', ['roles' => $roles[0]['data']]);
        }
    }

    //编辑管理员
    public function editAccount(AccountRequest $request, AccountService $accountService, RoleService $roleService)
    {
        $id = $request->input('id');

        if ($request->isMethod('PUT')) {

            $input = $request->input();

            $data = [
                'role_id' => $input['role_id'],
                'user_name' => $input['user_name'],
                'updated_at' => get_current_time(),
            ];

            $result = $accountService->init()->where(['id' => $id])->update($data, false);

            if ($result) {
                //写入日志
                AccountLogService::write('编辑管理员:'.$data['user_name'].'信息',$data);

                return showMessage('编辑成功', url('admin/accounts'));
            } else {
                return showMessage('编辑失败');
            }
        } else {
            if (!$id) {
                return showMessage('参数错误!');
            }

            $account = $accountService->init()->getInfo($id);

            //获取角色
            $roles = $roleService->init()->select(['id', 'role_name'])->getList(false);

            return view('system.account.edit', ['roles' => $roles[0]['data'], 'account' => $account]);
        }
    }

    //删除管理员
    public function delAccount(AccountRequest $request, AccountService $accountService)
    {
        if ($request->isMethod('DELETE')) {

            $data = $request->all();

            $roles = [
                'id' => 'required|integer'
            ];

            $messages = [
                'id.required' => '参数错误',
                'id.integer' => '参数错误'
            ];

            $validator = Validator::make($data, $roles, $messages);

            if ($validator->fails()) {
                $msg = $validator->errors()->first('id');
                return ['status' => 0, 'msg' => $msg];
            }

            $id = $data['id'];

            $result = $accountService->init()->delete($id, false);

            if ($result) {
                //写入日志
                AccountLogService::write('删除管理员:ID为'.$id,['id'=>$id]);
                return ['status' => 200, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }

        }

    }

    //角色列表
    public function roleList(RoleRequest $request, RoleService $roleService)
    {
        list($roles, $page) = $roleService->init()->select(['id', 'role_name', 'created_at', 'updated_at'])->getList();

        return view('system.role.index', ['roles' => $roles['data'], 'page' => $page]);
    }

    //添加角色
    public function createRole(RoleRequest $request, RoleService $roleService, MenuService $menuService)
    {
        if ($request->isMethod('POST')) {
            $input = $request->input();

            if (is_array($input['permission']) && !empty($input['permission'])) {
                $input['permission'] = json_encode($input['permission']);
            }

            $insertData = [
                'role_name' => $input['role_name'],
                'permission' => $input['permission'],
                'updated_at' => get_current_time(),
                'created_at' => get_current_time(),
            ];

            $result = $roleService->init()->add($insertData, false);

            if ($result) {
                //写入日志
                AccountLogService::write('添加角色:'.$insertData['role_name'],$insertData);

                return showMessage('添加成功', URL('admin/roles'));
            } else {
                return showMessage('添加失败');
            }
        } else {

            //获取顶级菜单和下级子类数据
            $category = $menuService->getTopAndChildren();

            return view('system.role.create', ['category' => $category[0]['data']]);
        }
    }

    //编辑角色
    public function editRole(RoleRequest $request, RoleService $roleService, MenuService $menuService)
    {
        if ($request->isMethod('PUT')) {

            $input = $request->input();

            $permission = [];

            if (isset($input['permission']) && !empty($input['permission'])) {
                $permission = json_encode($input['permission']);
            }

            $insertData = [
                'role_name' => $input['role_name'],
                'permission' => $permission,
                'updated_at' => get_current_time(),
            ];

            $result = $roleService->init()->where(['id' => $input['id']])->update($insertData, false);

            if ($result) {
                //写入日志
                AccountLogService::write('编辑角色:'.$insertData['role_name'],$insertData);
                return showMessage('编辑成功', URL('admin/roles'));
            } else {
                return showMessage('编辑失败');
            }

        } else {

            $id = $request->input('id');

            if (!$id) {
                return showMessage('参数错误!');
            }
            $role = $roleService->init()->getInfo($id);

            if (!empty($role['permission'])) {
                $role['permission'] = json_decode($role['permission'], true);
            }

            //获取顶级菜单和下级子类数据
            $category = $menuService->getTopAndChildren();

            return view('system.role.update', ['role' => $role, 'category' => $category[0]['data']]);
        }
    }

    //删除角色
    public function delRole(RoleRequest $request, RoleService $roleService)
    {
        if ($request->isMethod('DELETE')) {

            $data = $request->all();

            $roles = [
                'id' => 'required|integer'
            ];

            $messages = [
                'id.required' => '参数错误',
                'id.integer' => '参数错误'
            ];

            $validator = Validator::make($data, $roles, $messages);

            if ($validator->fails()) {
                $msg = $validator->errors()->first('id');
                return ['status' => 0, 'msg' => $msg];
            }

            $id = $data['id'];

            $result = $roleService->init()->delete($id, false);

            if ($result) {
                //写入日志
                AccountLogService::write('删除角色ID:'.$id,['id'=>$id]);

                return ['status' => 200, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }

        }
    }

    //后台日志列表
    public function logs(Request $request,AccountLog $accountLog)
    {
        $username = $request->input('username');

        $list = $accountLog->orderBy('id','DESC')->with(['account'=>function($query) use($username){
                if(!empty($username)){
                    return $query->where(['login_name','like','%'.$username.'%']);
                }
        }])->paginate(15);

        return view('system.log.index',['list'=>$list]);
    }
}
