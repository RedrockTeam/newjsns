<?php

function haha(){
	echo "hello!";
}

//检查权限(允许路由)
function verify_permission(){
	$currentRoute = Route::currentRouteName();
	$uid = Session::get('uid');
	$type = Group::find($uid);
	$permission	= $type->get_type();
	foreach($permission['path'] as $path){
		if($currentRoute == $path){
			return true;
		}
	}
	return false;
}