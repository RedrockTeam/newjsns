<?php
/**
 * 渲染后台模板
 */

class PersonalController extends BaseController {

    //个人中心首页
	public static function index(){
            $uid = Session::get('uid');
            $work = Mywork::where('uid', '=', $uid)->get();
            //需要一个高效的方法来取数据, 文章/图片/视频, 思考.
	}

}
