<?php

class PersonalController extends BaseController {

    //个人中心首页
	public function personalIndex(){
        $uid = Session::get('uid');
        $uid = 1;
        $user_info = User::find($uid);
        $works_id = Mywork::where('uid', '=', $uid)->get();
        $works = Mywork::getPersonalWorks($works_id);
        return $user_info;
            //需要一个高效的方法来取数据, 文章/图片/视频, 思考.
	}


}
