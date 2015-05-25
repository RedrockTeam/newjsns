<?php
/**
 * Class CommentmanageController
 * @Author Lich
 * 爱拍管理模块
 */

class PhotosController extends BaseController {

	//爱拍首页
    public function photoIndex(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        if($type_id!=null)
            $id = array(Navigation::find($type_id));
        else
            $id = Navigation::find(2)->hasManyson;
        return View::make('template.photos.photos')->with('data', $id);
	}

    //爱拍获取更多图片
    public function get_photos(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'%';
        $data = Album::where('album.status', '=', '1')->where('type_id', 'like',$type_id)->join('photos', 'album.album_cover', '=', 'photos.id')->select('album.id', 'photos.url as img_src', 'album.album_name as img_name', 'album.comment_num as comment_count', 'album.love_num as love_count', 'album.id as passage_id', 'album.type_id')->paginate(5);
        foreach($data as $v){
            $v->imgDetail;
        }
        return $data;
    }

    public function updateAlbum(){
        $data = Input::all();
        if(!isset($data['type'])) {
            $updateAlbum = array(
                'album_name' => e(strip_tags($data['ablum_name'])),
                'type_id' => $data['photo_type'],
                'album_cover' => Session::get('cover')
            );
            $album_id = Session::get('album_id');
            if(Album::where('id', '=', $album_id)->update($updateAlbum)){
                Session::forget('album_id');
                Session::forget('cover');
                return Redirect::back();
            }
            else
                return 'error';
        }
    }
    //上传
	public function upload(){//TODO:前端直接扔了个插件, 没办法验证, gg
        $data = Input::all();
        $album_id = Session::get('album_id')?Session::get('album_id'):null;
        if($album_id == null){
                $album = array(
                    'uid' => Session::get('uid'),
                    'comment_num' => 0,
                    'love_num' => 0,
                    'status' => 1
                );
                $album_id = Album::create($album);
                Session::put('album_id', $album_id['id']);
        }
            $file = file_get_contents("php://input");
            $type = str_replace('image/','',$data['type']);
            $name = 'public/uploads/'.md5(microtime()).'.'.$type;
            $originalname = 'public/uploads/'.md5(microtime()).'_original.'.$type;
            $img = Image::make($file);
            $img0 = Image::make($file);
            $originalimg = $img0;
//        ->resize(1366, null, function ($constraint) {
//                $constraint->aspectRatio();
//            });
            $newimg = $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
        $photo = array(
            'url' => $name,
            'original_url' => $originalname,
            'album_id' => Session::get('album_id'),
            'comment_num' => 0,
            'love_num' => 1,
            'status' => 1
        );
            $cover_id = Photos::create($photo);
            Session::put('cover', $cover_id['id']);
            $newimg->save($name);
            $originalimg->save($originalname);
            $newimg->destroy();
            $originalimg->destroy();
	}

}
