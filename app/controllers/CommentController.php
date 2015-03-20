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

    //点赞
    public function praise(){
        $input = Input::all();
        $father = Navigation::find($input['type_id']);
        if(DB::table($father['table_name'])->where('id', '=', $input['passage_id'])->increment('comment_num')){
            Session::put('praise.time', time());
            Session::put('praise.type_id', $input['type_id']);
            Session::put('praise.passage_id', $input['passage_id']);
            return $data = array("success" => true, "input" => $input);
        }
        elseif(Session::has('praise.time')&&Session::has('praise.type_id', $input['type_id'])&& Session::has('praise.passage_id', $input['passage_id'])) {
            $timespace = time() - Session::get('praise.time');
            if($timespace < 3600*3 && Session::get('praise.type_id') == $input['type_id'] && Session::get('praise.passage_id') == $input['passage_id']){
                return $data = array("success" => false, "error" => '三小时内只能对同一作品点赞一次');
            }
        }
        else{
           return $data = array("success" => false, "error" => '网络错误');
        }
    }
}
