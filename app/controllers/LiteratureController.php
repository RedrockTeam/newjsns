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
//        return $data['comment'];
        return View::make('template.litera_sub.litera_sub')->with('data', $data);
    }


    //发表文章
    public function createPassage(){
            $data = Input::all();
            return $data;
            $data['uid'] = Session::get('uid');
            $data['comment_num'] = 0;
            $data['love_num'] = 0;
            $data['status'] = 1;
            $file = Input::file('cover');
            $path = $this->uploadCover($file);
            $data['cover'] = $path;
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

    private function uploadCover ($file) {
        foreach($file as $v){
            if($v==null) {
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
            if($v==null) {
                continue;
            }
            $type = $v->getClientOriginalExtension();
            $name = 'public/uploads/'.md5(microtime()).'.'.$type;
            $originalname = 'public/uploads/'.md5(microtime()).'_original.'.$type;
            $img = Image::make($v);
            $img0 = Image::make($v);
            $originalimg = $img0->resize(1366, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg = $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save($name);
            $originalimg->save($originalname);
            $newimg->destroy();
            $originalimg->destroy();
            return $name;
        }
    }

}