<?php
/**
 * Class SystemmanageController
 * @Author Lich
 * 系统管理模块
 */
class SystemmanageController extends BaseController{
    //系统管理首页
    public function index(){
        $data['navigation'] = Navigation::where('father_id', '=', '0')->get();
        $data['routelist'] = Routelist::all();
        return View::make('admin.system')->with('data', $data);
    }

    //添加导航
    public function addnav(){
        $input = Input::all();
        if(!isset($input['table_name'])){
            $tablename = Navigation::find($input['father_id']);
            $input['table_name'] = $tablename['table_name'];
        }
        $data = array(
            'table_name' => $input['table_name'],
            'type' => $input['type'],
            'father_id' => $input['father_id'],
        );
        if(Navigation::create($data)){
            $info = '成功';
            return Redirect::back()->withErrors($info,'nav');
        }
        else{
            $info = '失败';
            return Redirect::back()->withErrors($info, 'nav');
        }
    }

    //添加路由
    public function addroute(){
        $input = Input::all();
        if(Routelist::create($input)){
            $info = '成功';
            return Redirect::back()->withErrors($info, 'route');
        }
        else{
            $info = '失败';
            return Redirect::back()->withErrors($info, 'route');
        }
    }

    //删除路由
    public function delroute(){
        $input = Input::all();
        if(Routelist::destroy($input['route_id'])){
            $info = '成功';
            return Redirect::back()->withErrors($info, 'route');
        }
        else{
            $info = '失败';
            return Redirect::back()->withErrors($info, 'route');
        }
    }
    //编辑路由
    public function editroute(){
        $input = Input::all();
        $data = array(
            'name' => $input['name'],
            'path' => $input['path'],
        );
        if(Routelist::where('id', '=', $input['id'])->update($data)){
            $info = '200';
            return $info;
        }
        else{
            $info = '403';
            return $info;
        }
    }
}
