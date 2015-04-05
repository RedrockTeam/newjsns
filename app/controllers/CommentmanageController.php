<?php

/**
 * Class CommentmanageController
 * @Author Lich
 * 评论管理模块
 */
class CommentmanageController extends BaseController{
    //评论管理首页
    public function index(){
        $data = Comment::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
        }
        return View::make('admin.comment')->with('data', $data);
    }

    //评论管理
    public function manage(){
        $input = Input::all();
        $status = $input['oprator_id'];
        $id = $input['id'];
        Comment::where('id', '=', $id)->update(array('status' => $status));
        Event::fire('Commentmanage.manage', array($status,$id));
        return $data = '200';
    }
}
