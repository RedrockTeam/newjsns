<?php
class MicromoviemanageController extends BaseController{
    public function index(){
        $data = Micromovie::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
//        return $data;
        return View::make('admin.micromovie')->with('data', $data);
    }
}
