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
        $type_id = Input::get('type_id')? Input::get('type_id'):'%';
        $id = Navigation::find(1)->hasManyson;
        $data['passagelist'] = Literature::getPassage($id, $type_id);
        $data['recommend_list'] = Literature::where('status', '=', '1')
                                            ->join('navigation', 'literature.type_id', '=', 'navigation.id')
                                            ->orderBy('love_num', 'desc')
                                            ->limit(12)
                                            ->select('literature.id as id', 'literature.type_id as type_id', 'type', 'title', 'cover', 'literature.id as passage_id')
                                            ->get();
        $data['navigation'] = $id;
        return View::make('template.literatrue.literatrue')->with('data', $data);
    }

    //文章详情页
    public static function detailPassage(){
        $id = Input::all();
        $passage_id = $id['passage_id'];
        $type_id = $id['type_id'];
        $page = isset($id['page'])? $id['page']:1;
        $passage = Literature::find($passage_id);
        $passage->user;
        $comment = Comment::findComment($type_id, $passage_id, $page);
        $data = array(
            'passage' => $passage,
            'comment' => $comment,
        );
        return View::make('template.litera_sub.litera_sub')->with('data', $data);
    }


    //发表文章
    public function createPassage(){
        $cover = Input::file('cover');
        if(!isset($cover))
            return Redirect::back();
            $data = Input::all();
           $pattern = '/base64,(.*?)"/';
           preg_match_all($pattern, $data['content'], $match, PREG_PATTERN_ORDER);
       if($match[1]){
           foreach($match[1] as $v) {
           $img = base64_decode($v);
           file_put_contents('public/uploads/tmp.jpg', $img);
           $name = 'public/uploads/tmp.jpg';
           $image = Image::make($name);
           $time = md5(microtime(true));
           $path =  'public/uploads/'.$time.'.jpg';
           $newimg = $image->resize(100, null, function ($constraint) {
             $constraint->aspectRatio();
           });
           $newimg->save($path);
           $newimg->destroy();
           $img_url[] = $path;
           $replace[] = 'src="'.$path.'"';
       }
       $pattern1 = '/src="data:(.*?)"/';
           foreach($replace as $r){
               $data = preg_replace($pattern1, $r, $data,1);
           }
       }

            $passage['uid'] = Session::get('uid');
            $passage['comment_num'] = 0;
            $passage['love_num'] = 0;
            $passage['status'] = 1;
            $passage['type_id'] = $data['type_id'];
            $passage['title'] = $data['title'];
            $html = new Common($data['content']);
            $passage['content'] = $html->getHtml();
            $passage['cover'] = $this->uploadCover($cover);
            $literature = Literature::create($passage);
            $insertedId = $literature->id;
            $user_work = array(
                'type_id' => $data['type_id'],
                'work_id' => $insertedId,
                'uid' => Session::get('uid')
            );
            Mywork::create($user_work);
            return Redirect::back();
    }

    private function uploadCover ($file) {

            $validator = Validator::make(
                array('photo' => $file),
                array('photo' => 'required|image|between:1,10240')
            );
            if ($validator->fails()) {
                return Redirect::back()->withInput()->withErrors($validator);
            }

            $type = $file->getClientOriginalExtension();
            $name = 'public/uploads/'.md5(microtime()).'.'.$type;
            $img = Image::make($file);
            $newimg = $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save($name);
            $newimg->destroy();
            return $name;

    }

}