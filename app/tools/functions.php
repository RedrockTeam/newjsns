<?php

function haha(){
	echo "hello!";
}

//检查权限(允许路由)
function verify_permission(){
    $currentRoute = Route::currentRouteName();
    $uid = Session::get('uid');
    Session::reflash();
    $permission = Group::where('uid', '=', $uid)
                        ->join('permission', 'group.type_id', '=', 'permission.type_id')
                        ->join('routelist', 'permission.path_id', '=', 'routelist.id')
                        ->select('path')
                        ->get();
    foreach($permission as $path){
        if($currentRoute == $path['path']){
            return true;
        }
    }
    return false;
}

