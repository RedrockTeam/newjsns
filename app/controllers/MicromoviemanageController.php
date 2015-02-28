<?php
class MicromoviemanageController extends BaseController{
    public function index(){
        $data = Micromovie::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return View::make('admin.micromovie')->with('data', $data);
    }

    public function manage(){
        $input = Input::all();
        $status = $input['oprator_id'];
        $id = $input['id'];
        Micromovie::where('id', '=', $id)->update(array('status' => $status));
        return $data = '200';
    }
}
