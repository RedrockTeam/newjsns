<?php

/**
 * 文学模块控制器
 * User: Lich
 * Date: 2015/2/2
 * Time: 20:09
 */

class LiteratureController extends BaseController{

    //文学首页
    public function literatureIndex(){
            $data = Literature::find(1);
            $data->user;
            $data->navigation;
            return $data;
    }

    //文章详情页
    public static function detailPassage(){
        $id = Input::all();
        $passage_id = $id['passage_id'];
        $type_id = $id['type_id'];
        $passage = Literature::find($passage_id);
        $passage->user;
        $comment = Comment::findComment($type_id, $passage_id, 1);
        $data = array(
            'passage' => $passage,
            'comment' => $comment,
        );
        return View::make('template.litera_sub.litera_sub')->with('data', $data);
    }


    //发表文章
    public function createPassage(){
            $data = Input::all();
            $literature = Literature::create($data);
            $insertedId = $literature->id;
            $type_id = $data['type_id'];
            $user_work = array(
                'type_id' => $type_id,
                'work_id' => $insertedId,
            );
            Mywork::create($user_work);
            return Redirect::back();
    }

    public function test(){
      return  Comment::findComment(1, 1, 1);
    }

}