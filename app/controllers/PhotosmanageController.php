<?php
class PhotosmanageController extends BaseController{
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
//        return $album;
        return View::make('admin.photos')->with('data', $data);
    }
}
