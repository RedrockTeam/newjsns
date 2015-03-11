<?php

/**
 * Class CommentController
 * @Author Lich
 * 发表评论模块
 * @param $result
 */
class CommentController extends BaseController {

    //发表评论
    public function comment(){
        $input = Input::all();
        $comment = new Comment();
        $result = $comment->addComment($input['type_id'], $input['passage_id'], $input['content'], $input['to'], $input['father_id']);
        return $result;
    }
}
