<?php
class SystemmanageController extends BaseController{
    public function index(){
        return View::make('admin.system');
    }
}
