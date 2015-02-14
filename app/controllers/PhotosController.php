<?php
/**
 * 渲染后台模板
 */

class PhotosController extends BaseController {

	public function index()
	{
		return View::make('test');
	}

	public function upload(){
        $file = Input::file('photo');

        foreach($file as $v){
            $validator = Validator::make(
                array('photo' => $v),
                array('photo' => 'required|image|between:1,10240')
            );
            if ($validator->fails())
            {
                $messages = $validator->messages();
                foreach ($messages->all() as $message)
                {
                    echo $message;
                }
            }

        }

        foreach($file as $v){
            $type = $v->getClientOriginalExtension();
            $name = md5(microtime()).'.'.$type;
            $getimg = JitImage::source($v)->get();
            $newfile = $getimg->fit(10, 10);
            $newfile->move('public/uploads', $name);
        }
	}

}
