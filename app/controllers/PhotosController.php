<?php
/**
 * 渲染后台模板
 */

class PhotosController extends BaseController {

	//爱拍首页
    public function photoIndex()
	{
        $message = 1;
		return View::make('test')->with('message', $message);
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
