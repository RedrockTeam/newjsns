<?php
/**
 * 渲染后台模板
 */

class MicromovieController extends BaseController {

    //微视首页
	public function micromovieIndex(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        if($type_id!=null)
            $id = array(Navigation::find($type_id));
        else
            $id = Navigation::find(4)->hasManyson;
        $data['navigation'] = $id;
        $data['category'] = Navigation::find(4)->hasManyson;
        $data['micromovielist'] = Micromovie::getMicromovie($id);
        $data['tags'] = Micromovie::getTags($data['category']);
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
        return View::make('template.microm_sub.microm_sub')->with('data', $data);
    }

    //微视标签搜索
    public function micromovieSearch(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        $tag = Input::get('tag')? Input::get('tag'):'';
        if($tag == null || $type_id == null)
            $this->micromovieIndex();
        else
            $tag = '%'.$tag.'%';
        $works = Tags::where('type_id', '=', $type_id)
            ->where('tag', 'like', $tag)
            ->select('type_id as id', 'work_id')
            ->get();
        $id = array(Navigation::find($type_id));
        $data['navigation'] = $id;
        $data['micromovielist'] = Micromovie::getMicromovie($works);
        $data['category'] = Navigation::find(4)->hasManyson;
        $data['tags'] = Micromovie::getTags($data['category']);
        return View::make('template.micromovie.micromovie')->with('data', $data);
    }
}
