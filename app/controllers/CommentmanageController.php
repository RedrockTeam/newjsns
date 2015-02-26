<?php
class CommentmanageController extends BaseController{
    public function index(){
        $data = Comment::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
        }
        return View::make('admin.comment')->with('data', $data);
    }
}
