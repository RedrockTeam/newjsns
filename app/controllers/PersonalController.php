<?php

class PersonalController extends BaseController {

    //个人中心首页
	public function personalIndex(){
        $uid = Session::get('uid');
        $user_info = User::find($uid);

        $works_id = Mywork::where('uid', '=', $uid)->get();
        $collection_id = Collection::where('uid', '=', $uid)->get();

        $works = Mywork::getPersonalWorks($works_id);//我的作品
        $collection = Collection::getCollectWorks($collection_id);//我的收藏
        $from = Comment::where('from', '=', $uid)->get();//我的评论
        Comment::where('to', '=', $uid)->update(array('read_status' => '1'));//更新为已读评论
        $to = Comment::where('to', '=', $uid)->get();//评论我的

        $data = array(
            'user_info' => $user_info,
            'works' => $works,
            'collection' => $collection,
            'from' => $from,
            'to' => $to,
        );
        return View::make('template.personal.personal')->with('data', $data);//TODO:需要一个高效的方法来取数据, 文章/图片/视频, 思考.
	}


}
