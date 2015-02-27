<?php
class UsermanageController extends BaseController{
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
        Group::where('uid', '=', $input['uid'])->update(array('type_id' => $input['type_id'])); $info = '成功';
        return Redirect::back()->withErrors($info, 'editgroup');
    }
}
