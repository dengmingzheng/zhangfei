<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ArticleClassRequest;
use App\Http\Requests\Admin\ArticleRequest;
use App\Services\ArticleService;
use App\Services\ArticleClassService;
use App\Services\AccountLogService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Tools\ImageUploadHandler;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //文章列表
    public function articles(ArticleRequest $request, ArticleService $articleService,ArticleClassService $articleClassService)
    {
        $keyword = $request->input('keyword');
        $is_show = $request->input('is_show');
        $ac_id = $request->input('ac_id');

        $condition = [];

        if ($keyword) {
            $condition[] = ['title', 'like', '%' . $keyword . '%'];
        }

        if(is_numeric($is_show)){
            $condition['is_show'] = $is_show;
        }

        if(is_numeric($ac_id) && $ac_id){
            $condition['ac_id'] = $ac_id;
        }

        list($list, $page) = $articleService->init()->where($condition)->with(['class', 'account'])->getList(true);

        $articleClass = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false)[0]['data'];

        return view('system.articles.index', ['list' => $list['data'], 'page' => $page,'articleClass' => $articleClass]);
    }

    //添加文章
    public function createArticle(ArticleRequest $request, ArticleService $articleService, ArticleClassService $articleClassService, AccountLogService $accountLogService)
    {
        if ($request->isMethod('POST')) {
            $input = $request->input();

            $data = [
                'ac_id' => $input['ac_id'],
                'title' => $input['title'],
                'author' => $input['author'],
                'account_id' => Auth::guard('admin')->user()->id,
                'content' => $input['content'],
                'sort' => $input['sort'],
                'is_show' => $input['is_show'],
                'created_at' => get_current_time(),
                'updated_at' => get_current_time(),
            ];

            $result = $articleService->init()->add($data);

            if ($result) {
                $data['id'] = $result;

                $accountLogService->write('添加文章,名称为:' . $data['title'], $data);

                return showMessage('添加成功!', url('admin/articles'));
            } else {
                return showMessage('添加失败!');
            }
        } else {
            $articleClass = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false)[0]['data'];

            return view('system.articles.create', ['articleClass' => $articleClass]);
        }
    }

    //编辑文章
    public function editArticle(ArticleRequest $request, ArticleService $articleService, ArticleClassService $articleClassService, AccountLogService $accountLogService)
    {
        $id = $request->input('id');

        if ($request->isMethod('PUT')) {
            $input = $request->input();

            $data = [
                'ac_id' => $input['ac_id'],
                'title' => $input['title'],
                'author' => $input['author'],
                'account_id' => Auth::guard('admin')->user()->id,
                'content' => $input['content'],
                'sort' => $input['sort'],
                'is_show' => $input['is_show'],
                'updated_at' => get_current_time(),
            ];

            $result = $articleService->init()->where(['id' => $id])->update($data);

            if ($result) {
                $data['id'] = $id;
                $accountLogService->write('编辑文章,名称为:' . $data['title'], $data);

                return showMessage('编辑成功!', url('admin/articles'));
            } else {
                return showMessage('编辑失败!');
            }
        } else {
            if (!is_numeric($id) || !$id) {
                return showMessage('参数错误!');
            }

            $detail = $articleService->init()->getInfo($id);

            $articleClass = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false)[0]['data'];

            return view('system.articles.edit', ['articleClass' => $articleClass, 'detail' => $detail]);
        }
    }

    //删除文章
    public function delArticle(ArticleRequest $request, ArticleService $articleService, AccountLogService $accountLogService)
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

            $result = $articleService->init()->delete($data['id']);

            if ($result) {
                //写入日志
                $accountLogService->write('删除文章,ID为:' . $data['id']);

                return ['status' => 200, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }
        }
    }

    //文章分类列表
    public function articleClasses(ArticleClassRequest $request, ArticleClassService $articleClassService)
    {
        $title = $request->input('title');
        $parent_id = $request->input('parent_id');
        $condition = [];

        if($title){
            $condition[] = ['title', 'like', '%' . $title . '%'];
        }

        if(is_numeric($parent_id) && $parent_id){
            $condition['parent_id'] = $parent_id;
        }

        list($list, $page) = $articleClassService->init()->where($condition)->with(['parent'])->getList(true);

        $articleClass = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false)[0]['data'];

        return view('system.articles.articleClass', ['list' => $list['data'], 'page' => $page, 'articleClass' => $articleClass]);
    }

    //添加文章分类
    public function createArticleClasses(ArticleClassRequest $request, ArticleClassService $articleClassService, AccountLogService $accountLogService)
    {
        if ($request->isMethod('POST')) {
            $input = $request->input();

            $data = [
                'title' => $input['title'],
                'parent_id' => $input['parent_id'],
                'sort' => $input['sort'],
                'created_at' => get_current_time(),
                'updated_at' => get_current_time(),
            ];

            $result = $articleClassService->init()->add($data);

            if ($result) {
                //写入日志
                $data['id'] = $result;
                $accountLogService->write('添加文章分类,名称为:' . $data['title'], $data);

                return showMessage('添加成功', url('admin/articleClasses'));
            } else {
                return showMessage('添加失败');
            }
        } else {
            $articleClasses = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false);

            return view('system.articles.createArticleClass', ['articleClasses' => $articleClasses[0]['data']]);
        }
    }

    //编辑文章分类
    public function editArticleClasses(ArticleClassRequest $request, ArticleClassService $articleClassService, AccountLogService $accountLogService)
    {
        $id = $request->input('id');

        if ($request->isMethod('PUT')) {

            $input = $request->input();

            $data = [
                'title' => $input['title'],
                'parent_id' => $input['parent_id'],
                'sort' => $input['sort'],
                'updated_at' => get_current_time(),
            ];

            $result = $articleClassService->init()->where(['id' => $id])->update($data);

            if ($result) {
                //写入日志
                $data['id'] = $id;
                $accountLogService->write('编辑文章分类,名称为:' . $data['title'], $data);

                return showMessage('编辑成功', url('admin/articleClasses'));
            } else {
                return showMessage('编辑失败');
            }
        } else {

            if (!is_numeric($id) || !$id) {
                return showMessage('参数错误!');
            }

            //分类详情
            $detail = $articleClassService->init()->getInfo($id);

            //分类列表
            $articleClasses = $articleClassService->init()->where(['parent_id' => NULL])->with(['children'])->getList(false);

            return view('system.articles.editArticleClass', ['articleClasses' => $articleClasses[0]['data'], 'detail' => $detail]);
        }
    }

    //删除文章分类
    public function delArticleClasses(ArticleClassRequest $request, ArticleClassService $articleClassService, AccountLogService $accountLogService)
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

            $result = $articleClassService->init()->delete($data['id']);

            if ($result) {
                //写入日志
                $accountLogService->write('删除文章分类,ID为:' . $data['id']);

                return ['status' => 200, 'msg' => '删除成功'];
            } else {
                return ['status' => 0, 'msg' => '删除失败'];
            }
        }
    }

    //上传图片
    public function upload(Request $request, ImageUploadHandler $imageUploadHandler)
    {
        if ($request->isMethod('POST')) {
            // 初始化返回数据，默认是失败的
            $data = [
                'success' => false,
                'msg' => '上传失败!',
                'file_path' => ''
            ];
            // 判断是否有上传文件，并赋值给 $file
            if ($file = $request->upload_file) {
                // 保存图片到本地
                $result = $imageUploadHandler->save($file, 'artlices', 1024);
                // 图片保存成功的话
                if ($result) {
                    $data['file_path'] = $result['path'];
                    $data['msg'] = "上传成功!";
                    $data['success'] = true;
                }
            }
            return $data;
        }
    }
}
