<?php
/**
 * Class UsermanageController
 * @Author Lich
 * 用户管理模块
 */
class UsermanageController extends BaseController{
    //用户管理首页
    public function index(){
        $data['user'] = User::orderBy('id', 'desc')->paginate(20);
        foreach($data['user'] as $v){
            $v->getType;
        }
        $data['rolelist'] = User_type::all();
        $data['routelist'] = Routelist::all();
        foreach($data['rolelist'] as $role){
            $data['grouplist'][] = Permission::where('type_id', '=', $role['id'])->join('routelist', 'permission.path_id', '=', 'routelist.id')->get();
        }
        return View::make('admin.user')->with('data', $data);
    }

    //添加用户组
    public function addgroup(){
        $input = Input::all();
        User_type::create($input);
        $info = '成功';
        return Redirect::back()->withErrors($info, 'group');
    }

    //del 用户组
    public function delgroup(){
        $input = Input::all();
        $id = $input['id'];
        User_type::destroy($id);
        Permission::where('type_id', '=', $id)->delete();
        $info = '成功';
        return Redirect::back()->withErrors($info, 'group');
    }

    //改变用户组
    public function editgroup(){
        $input =Input::all();
        Group::where('uid', '=', $input['uid'])->update(array('type_id' => $input['type_id']));
        $info = '成功';
        return Redirect::back()->withErrors($info, 'editgroup');
    }

    //删除授权路由
    public function delroute(){
        $input = Input::all();
        Permission::where('type_id', '=', $input['role_id'])->where('path_id', '=', $input['id'])->delete();
        $info = '成功';
        return Redirect::back()->withErrors($info, 'route');
    }

    //授权路由
    public function addroute(){
        $input = Input::all();
        Permission::create($input);
        $info = '成功';
        return Redirect::back()->withErrors($info, 'route');
    }

    //用户状态
    public function manage(){
        $input = Input::all();
        $status = $input['oprator_id'];
        $id = $input['id'];
        User::where('id', '=', $id)->update(array('status' => $status));
        return $data = '200';
    }

    //搜索用户
    public function search(){
        $input = Input::all();
        $content = $input['content'];
        $data['data'] = User::where('username', 'like', '%'.$content.'%')->get();
        foreach($data['data'] as $v){
            $v->getType;
        }
        $data['status'] = 200;
        return $data;
    }
}
