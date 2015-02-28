<?php
/**
 * 渲染后台模板
 */

class PhotosController extends BaseController {

	//爱拍首页
    public function photoIndex(){
        return View::make('template.photos.photos');
	}

    //爱拍获取更多图片
    public function get_photos(){
        $data = Album::where('album.status', '=', '1')->join('photos', 'album.album_cover', '=', 'photos.id')->select('album.id', 'photos.url as img_src', 'album.album_name as img_name', 'album.comment_num as comment_count', 'album.love_num as love_count')->paginate(5);
        foreach($data as $v){
            $v->imgDetail;
        }
        $info = array(
            'success' => true,
            'isDrain' => false,
            'img_type'=> 'album',
            'data' => $data,
        );
        return $info['data'];
    }

    //上传
	public function upload(){
        $file = Input::file('photo');
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
        }
	}

}
