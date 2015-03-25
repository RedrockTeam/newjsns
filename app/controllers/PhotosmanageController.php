<?php
/**
 * Class CommentmanageController
 * @Author Lich
 * 爱拍管理模块
 */
class PhotosmanageController extends BaseController{
    //爱拍管理首页
    public function index(){
        $album = Album::orderBy('created_at', 'desc')->paginate(20);
        foreach($album as $v){
            $v->user;
            $v->navigation;
        }
        $photos = Photos::orderBy('created_at', 'desc')->paginate(20);
        foreach($photos as $va){
            $va->findFather;
        }
        $data = array(
            'album' => $album,
            'photos'=> $photos,
        );
        return View::make('admin.photos')->with('data', $data);
    }

    //相册管理
    public function albummanage(){
        $input = Input::all();
        $id = $input['id'];
        $status = $input['oprator_id'];
        Album::where('id', '=', $id)->update(array('status' => $status));
        Photos::where('album_id', '=', $id)->update(array('status' => $status));
        return $data = '200';
    }
    //相片管理
    public function photomanage(){
        $input = Input::all();
        $id = $input['id'];
        $status = $input['oprator_id'];
        Photos::where('id', '=', $id)->update(array('status' => $status));
        return $data = '200';
    }
}
