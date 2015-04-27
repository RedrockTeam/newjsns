<?php
/**
 * Class CommentmanageController
 * @Author Lich
 * 原味管理模块
 */
class OriginalController extends BaseController {

    //原味首页
	public function originalIndex(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        if($type_id!=null)
            $id = array(Navigation::find($type_id));
        else
            $id = Navigation::find(5)->hasManyson;
        $data['navigation'] = $id;
        $data['main'] = Original::getMain($id);
        $data['category'] = Navigation::find(5)->hasManyson;
        $data['tags'] = Original::getTags($data['category']);
        return View::make('template.original.original')->with('data', $data);
	}

    //原味标签搜索
    public function orginalTagSearch(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        $tag = Input::get('tag')? Input::get('tag'):'';
        if($tag == null || $type_id == null)
            $this->originalIndex();
        else
            $tag = '%'.$tag.'%';
        $works = Tags::where('type_id', '=', $type_id)
            ->where('tag', 'like', $tag)
            ->select('type_id as id', 'work_id')
            ->get();
        $id = array(Navigation::find($type_id));
        $data['navigation'] = $id;
        $data['main'] = Original::getMain($works);
        $data['category'] = Navigation::find(5)->hasManyson;
        $data['tags'] = Original::getTags($data['category']);
        return View::make('template.original.original')->with('data', $data);

    }


    //原味视频/音频类型的上传
    public function originalVideoUpload(){
        $input = Input::all();
        $cover = Input::file('cover');
        if(!isset($cover))
            return Redirect::back();
        $cover_name = $this->uploadCover($cover);
        $username = User::where('id', '=', Session::get('uid'))->first();
        $data = array(
            'type_id' => $input['type_id'],
            'cover_url' => $cover_name,
            'url' => $input['url'],
            'title' => $input['title'],
            'introduce' => $input['introduce'],
            'author' => $username,
            'uid' => Session::get('uid'),
            'love_num' => 0,
            'comment_num' => 0,
            'status' => 1
        );
        Original::create($data);
        $error = '发表成功';
        return Redirect::back()->with($error);
    }
    //原味图片类型上传
    public function originalPhotoUpload(){
        $input = Input::all();
        $cover = Input::file('cover');
        if(!isset($cover))
            return Redirect::back();
        $cover_name = $this->uploadCover($cover);
        $username = User::where('id', '=', Session::get('uid'))->first();
        $data = array(
            'cover_url' => $cover_name,
            'url' => $cover_name,
            'type_id' => $work_name,
            'title' => $data[''],
            'introduce' => $data[''],
            'author' => $username['nickname'],
            'uid' => Session::get('uid'),
            'love_num' => 0,
            'comment_num' => 0,
            'status' => 1
        );
        Original::create($data);
        $error = '发表成功';
        return Redirect::back()->with($error);
    }
    //上传图片
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
