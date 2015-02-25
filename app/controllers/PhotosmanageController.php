<?php
class PhotosmanageController extends BaseController{
    public function index(){
        return View::make('admin.photos');
    }
}
