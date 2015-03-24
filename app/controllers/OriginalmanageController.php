<?php
class OriginalmanageController extends BaseController{
    public function index(){
        $data = Original::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return View::make('admin.original')->with('data', $data);
    }

    public function manage(){
        $input = Input::all();
        Original::find($input['id'])->update(array('status'=>$input['operator_id']));
        return $data['status'] = 200;
    }
}
