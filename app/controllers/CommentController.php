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
        if(Session::has('praise.time'.$input['type_id'].$input['passage_id'])&&Session::has('praise.type_id'.$input['type_id'])&& Session::has('praise.passage_id'.$input['passage_id'])) {
            $timespace = time() - Session::get('praise.time'.$input['type_id'].$input['passage_id']);
            if($timespace < 3600*3 && Session::get('praise.type_id'.$input['type_id']) == $input['type_id'] && Session::get('praise.passage_id'.$input['passage_id']) == $input['passage_id']){
                return $data = array("success" => false, "error" => '三小时内只能对同一作品点赞一次');
            }
        }
        elseif(DB::table($father['table_name'])->where('id', '=', $input['passage_id'])->increment('love_num')){
            Session::put('praise.time'.$input['type_id'].$input['passage_id'], time());
            Session::put('praise.type_id'.$input['type_id'], $input['type_id']);
            Session::put('praise.passage_id'.$input['passage_id'], $input['passage_id']);
            return $data = array("success" => true, "input" => $input);
        }
        else{
           return $data = array("success" => false, "error" => '网络错误');
        }
    }
    //踩
    public function thread(){
        $input = Input::all();
        $father = Navigation::find($input['type_id']);
        if(Session::has('thread.time'.$input['type_id'].$input['passage_id'])&&Session::has('thread.type_id'.$input['type_id'])&& Session::has('thread.passage_id'.$input['passage_id'])) {
            $timespace = time() - Session::get('thread.time'.$input['type_id'].$input['passage_id']);

            if($timespace < 3600*3 && Session::get('thread.type_id'.$input['type_id']) == $input['type_id'] && Session::get('thread.passage_id'.$input['passage_id']) == $input['passage_id']){
                return $data = array("success" => false, "error" => '三小时内只能对同一作品踩一次');
            }
            else
                return $input['type_id'];
        }
        elseif(DB::table($father['table_name'])->where('id', '=', $input['passage_id'])->decrement('love_num')){
            Session::put('thread.time'.$input['type_id'].$input['passage_id'], time());
            Session::put('thread.type_id'.$input['type_id'], $input['type_id']);
            Session::put('thread.passage_id'.$input['passage_id'], $input['passage_id']);
            return $data = array("success" => true, "input" => $input);
        }
        else{
            return $data = array("success" => false, "error" => '网络错误');
        }
    }
    //收藏
    public function collect(){
        $input = Input::all();
        $type_id = $input['type_id'];
        $work_id = $input['passage_id'];
        $father = Navigation::find($input['type_id']);
        if(!$input){
            return $data = array('err'=>'收藏失败', 'success'=>false);
        }
        $id = Collection::where('type_id', '=', $type_id)->where('work_id', '=', $work_id)->where('uid', '=', Session::get('uid'))->first();
        if($id){
            DB::table($father['table_name'])->where('id', '=', $work_id)->decrement('love_num');
            Collection::destroy($id['id']);
            return $data = array('info'=>/*'取消收藏成功'*/ false, 'success'=>true);
        }
        else{
            DB::table($father['table_name'])->where('id', '=', $work_id)->increment('love_num');
            Collection::create(array('type_id'=>$type_id, 'work_id'=>$work_id, 'uid'=>Session::get('uid')));
            return $data = array('info'=>/*'收藏成功'*/true, 'success'=>true);
        }

    }

    //ajax获取评论
    public function originalGetComment(){
        $id = Input::all();
        $passage_id = $id['passage_id'];
        $type_id = $id['type_id'];
        $page = isset($id['page'])? $id['page']:1;
        $comment = Comment::findComment($type_id, $passage_id, $page);
        return $comment;
    }
}
