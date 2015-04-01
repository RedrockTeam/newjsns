<?php
/**
 * @Author Lich
 * 事件监听模块
 * Date: 2015/3/26
 * Time: 0:13
 */
/*******事件监听绑定*********/
//登陆
Event::listen('auth.login', function($result){
    $event = array(
        'uid' => $result->id,
        'action' => '登陆, 于'.Request::getClientIp(),
    );
    Logget::create($event);
});
//文学管理
Literature::updated(function($result){
    $op = ($result->status==0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对文学类标题为'.$result->title.'的文章进行'.$op,
    );
     Logget::create($event);
});

//爱拍管理
Event::listen('Photosmanage.albummanage', function($result, $id) {
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对相册id为'.$id.$op,
    );
    Logget::create($event);
});

Event::listen('Photosmanage.photomanage', function($result, $id) {
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对相片id为'.$id.$op,
    );
    Logget::create($event);
});

//微视管理
Event::listen('Micromoviemanage.manage',function($result, $id){
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对微视id为'.$id.$op,
    );
    Logget::create($event);
});
//读书影逝管理
Event::listen('Recommendmanage.manage',function($result, $id){
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对读书影逝id为'.$id.$op,
    );
    Logget::create($event);
});
//原味管理
Original::updated(function($result){
    $op = ($result->status==0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对原味标题为'.$result->title.'的作品进行'.$op,
    );
    Logget::create($event);
});
//评论管理
Event::listen('Commentmanage.manage',function($result, $id){
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对评论id为'.$id.$op,
    );
    Logget::create($event);
});
//用户管理
Event::listen('Usermanage.manage',function($result, $id){
    $op = ($result == 0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对用户id为'.$id.$op,
    );
    Logget::create($event);
});