<?php

class CommentController extends BaseController {

    //发表评论
    public function comment(){
//        if(!Request::ajax()){
//            $data = array();//TODO:返回错误信息
//            return $data;
//        }
        $input = Input::all();
        $comment = new Comment();
       $result = $comment->addComment($input['type_id'], $input['passage_id'], $input['content'], $input['to'], $input['father_id']);
        return $result;
    }
}
