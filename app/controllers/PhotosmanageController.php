<?php
class PhotosmangageController extends BaseController{
    public function index(){
        return View::make('admin.photos');
    }
}
