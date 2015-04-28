<?php
/**
 * Class MicromovieController
 * @Author Lich
 * 微视模块
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

    public function micromovieupload(){
        $data = Input::all();
        $cover = Input::file();
        $data['cover_url'] = $this->uploadCover($cover);
        $data['uid'] = Session::get('uid');
        $author = User::find(Session::get('uid'));
        $data['author'] = $author['username'];
        $data['star'] = 0;
        $data['comment_num'] = 0;
        $data['love_num'] = 0;
        $data['status'] = 1;
        $work = Micromovie::create($data);
        $mywork = array(
            'type_id' => $work['type_id'],
            'work_id' => $work['id'],
            'uid' => Session::get('uid')
        );
        Mywork::create($mywork);
        return Redirect::back();
    }

    private function uploadCover ($file) {
        foreach($file as $v){
            if($v == null) {
                continue;
            }
            $validator = Validator::make(
                array('photo' => $v),
                array('photo' => 'required|image|between:1,10240')
            );
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }
        foreach($file as $v){
            if($v == null) {
                continue;
            }
            $type = $v->getClientOriginalExtension();
            $name = 'public/uploads/'.md5(microtime()).'.'.$type;
            $img = Image::make($v);
            $newimg = $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save($name);
            $newimg->destroy();
            return $name;
        }
    }

}
