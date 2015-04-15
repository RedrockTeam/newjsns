<?php
/**
 * Class PersonalController
 * @Author Lich
 * 个人中心模块
 */
class PersonalController extends BaseController {

    //个人中心首页
	public function personalIndex(){
        $uid = Session::get('uid');
        if($uid == null){
            $error = '请先登录';
            return Redirect::to('/')->withErrors($error);
        }
        $user_info = User::find($uid);

        $works_id = Mywork::where('uid', '=', $uid)->get();
        $collection_id = Collection::where('uid', '=', $uid)->get();
        if(count($works_id)!=0)
            $works = Mywork::getPersonalWorks($works_id);//我的作品
        else
            $works = null;
        if(count($collection_id)!=0)
            $collection = Collection::getCollectWorks($collection_id);//我的收藏
        else
            $collection = null;
        $from = Comment::where('from', '=', $uid)->join('users', 'comment.from', '=', 'users.id')->get();//我的评论
        Comment::where('to', '=', $uid)->update(array('read_status' => '1'));//更新为已读评论
        $to = Comment::where('to', '=', $uid)->join('users', 'comment.to', '=', 'users.id')->get();//评论我的

        $data = array(
            'user_info' => $user_info,
            'works' => $works,
            'collection' => $collection,
            'from' => $from,
            'to' => $to,
        );
        return View::make('template.personal.personal')->with('data', $data);//TODO:需要一个高效的方法来取数据, 文章/图片/视频, 思考.
	}


    //上传头像
    public function uploadHead(){}

    //修改资料
    public function editPersonalInfo(){
        $input = Input::all();
        $username = trim($input['username']);
        $signature = trim($input['signatrue']);
        $email = trim($input['email']);
        if($username==null || $username==null){
            $error = '昵称或邮箱不能为空!';
            return Redirect::back()->withErrors($error);
        }
        $uid = Session::get('uid');
        $data = array(
                'username' => $username,
                'introduce'=> $signature,
                'email' => $email
        );
        User::where('id', '=', $uid)->update($data);
        $error = '修改成功!';
        return Redirect::back()->withErrors($error);
    }

    public function uploads(){
        $passage_type = Navigation::where('father_id', '=', 1)->get();
        $micromovie_type = Navigation::where('father_id', '=', 4)->get();
        $data = array(
            'page_pos' => 2,   //页面位置 0表示图片栏1表示微视栏2表示文章栏
            'passage_type' => $passage_type,
            'micromovie_type' => $micromovie_type
        );
//        return $data;
        return View::make("template.uploads.uploads")->with('data', $data);
    }

}
