<?php
class SystemmanageController extends BaseController{
    public function index(){
        $data['navigation'] = Navigation::where('father_id', '=', '0')->get();
        $data['routelist'] = Routelist::all();
        return View::make('admin.system')->with('data', $data);
    }
}
