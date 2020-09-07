<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\MenuService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $accountData= Auth::guard('admin')->user();//当前登录用户数据

        $currentUrl = $request->path();//获取当前路由
        $currentUrlArray = explode('/',$currentUrl);//分割路由成数组[0=>'admin',1=>'menus',2=>'createMenu']

        $menuService = new MenuService();

        $currentMenu = $menuService->init()->where(['url'=>$currentUrl,'guard'=>'admin'])->getInfo();//当前菜单数据

        if(empty($currentMenu)){
            return showMessage('当前操作权限不存在');
        }

        $topNav = [];//顶部导航
        $leftNav = []; //左侧导航

        //获取顶部导航和子数据
        $navs = $menuService->init()->where(['guard'=>'admin','parent_id'=>NULL])->orderBy('sort','asc')->with(['children'])->getList(false)[0]['data'];

        if(!empty($navs)){
            foreach ($navs as $key => $nav){
                $topNav[$key] = $nav;
                if($currentMenu['group'] == $nav['group']){
                    $topNav[$key]['class'] = 'actived';//顶部选中
                    //获取左侧菜单
                    $leftNav = $menuService->init()->where(['guard'=>'admin','parent_id'=>$nav['id']])->orderBy('sort','asc')->with(['children'])->getList(false)[0]['data'];
                }
            }
        }

        if(!empty($leftNav)){
            //左侧菜单选择状态
            foreach ($leftNav as &$value){
                if($currentMenu['group'] == $value['group'] &&  ($currentUrlArray[0].'/'.$currentUrlArray[1] == $value['url'])){
                    $value['class'] = 'selected';
                }
            }
        }

        view()->share('navs',$navs);
        view()->share('topNav', $topNav);
        view()->share('leftNav', $leftNav);

        return $next($request);
    }

}
