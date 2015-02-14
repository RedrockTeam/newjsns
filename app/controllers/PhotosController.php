<?php
/**
 * 渲染后台模板
 */

class PhotosController extends BaseController {

	public function index()
	{
        $message = 1;
		return View::make('test')->with('message', $message);
	}

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
            if ($validator->fails())
            {
                return Redirect::to('test')->withInput()->withErrors($validator);
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
        }
	}

}
