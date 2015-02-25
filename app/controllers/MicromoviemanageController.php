<?php
class MicromoviemanageController extends BaseController{
    public function index(){
        return View::make('admin.micromovie');
    }
}
