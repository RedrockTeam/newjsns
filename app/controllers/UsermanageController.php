<?php
class UsermanageController extends BaseController{
    public function index(){
        return View::make('admin.user');
    }
}
