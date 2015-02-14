<?php

function haha(){
	echo "hello!";
}

//检查权限(允许路由)
function verify_permission(){
	$currentRoute = Route::currentRouteName();
	$uid = Session::get('uid');
	$uid = 1;
	$permission = Group::find($uid)->route;
	foreach($permission as $path){
		if($currentRoute == $path['path']){
			return true;
		}
	}
	return false;
}


function upload(){

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
			$newfile = JitImage::source($getimg)->fit(10, 10);
			$newfile->move('public/uploads', $name);
		}

    $img = JitImage::source('public/uploads/6b809a829abced5c662b60045cfad712.png')->scale(50);
    $img->move('public/uploads', 'test.png');
		return 'ok';

}