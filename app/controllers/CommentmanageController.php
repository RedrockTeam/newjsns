<?php
class CommentmangageController extends BaseController{
    public function index(){
        return View::make('admin.comment');
    }
}
