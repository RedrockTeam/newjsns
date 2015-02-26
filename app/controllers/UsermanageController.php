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
}
