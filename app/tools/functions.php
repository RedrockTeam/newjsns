<?php

function haha(){
	echo "hello!";
}

//检查权限(允许路由)
function verify_permission(){
    $currentRoute = Route::currentRouteName();
    $uid = Session::get('uid');
    $uid = 1;
    $permission = Group::find($uid)->routelists;
    foreach($permission as $path){
        if($currentRoute == $path['path']){
            return 'ok';
        }
    }
    return 'gg';
}

