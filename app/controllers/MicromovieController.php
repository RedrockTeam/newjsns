<?php
/**
 * 渲染后台模板
 */

class MicromovieController extends BaseController {

    //微视首页
	public function micromovieIndex(){
        $id = Navigation::find(4)->hasManyson;
        $data['navigation'] = $id;
        $data['micromovielist'] = Micromovie::getMicromovie($id);
        $data['tags'] = Micromovie::getTags($id);
        return View::make('template.micromovie.micromovie')->with('data',$data);
	}

    //微视分页
    public function micromovieDetail(){
        $id = Input::all();
        $passage_id = $id['passage_id'];
        $type_id = $id['type_id'];
        $page = isset($id['page'])? $id['page']:1;
        $movie = Micromovie::find($passage_id);
        $movie->user;
        $comment = Comment::findComment($type_id, $passage_id, $page);
        $hot = Micromovie::orderBy('love_num', 'desc')->limit(3)->get();
        $data = array(
            'movie' => $movie,
            'comment' => $comment,
            'hot' => $hot,
        );
       // return $data;
        return View::make('template.microm_sub.microm_sub')->with('data', $data);
    }

}
