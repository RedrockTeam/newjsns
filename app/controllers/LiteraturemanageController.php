<?php
class LiteraturemanageController extends BaseController{
    public function index(){
        $data = Literature::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return View::make('admin.literature')->with('data', $data);
    }
}
