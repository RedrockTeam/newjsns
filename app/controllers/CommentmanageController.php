<?php
class CommentmanageController extends BaseController{
    public function index(){
        return View::make('admin.comment');
    }
}
