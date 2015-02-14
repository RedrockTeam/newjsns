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
            $img = Image::make($v);
            $newimg = $img->resize(600, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newimg->save($name);
        }
	}

}
