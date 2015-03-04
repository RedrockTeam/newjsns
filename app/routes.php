<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*-------------------------------------------------blade 测试---------------------*/
#首页
Route::get('/', array('as' => 'index', 'uses' => 'IndexController@index'));

#原味
Route::get('original', array('as' => 'original', 'uses' => 'OriginalController@originalIndex'));

#爱拍
Route::get('photos', array('as' => 'photos', 'uses' => 'PhotosController@photoIndex'));

#文学
Route::get('literatrue',array('as' => 'literatrue', 'uses' => 'LiteratureController@literatureIndex'));

#文学分页
Route::get('litera_sub', array('as' => 'litera_sub', 'uses' => 'LiteratureController@detailPassage'));

#读书影逝
Route::get('bookmovie', array('as' => 'recommend', 'uses' =>'RecommendController@recommendIndex'));

#读书影逝分页
Route::get('bkmv_sub', array('as' => 'bkmv_sub', 'uses' =>'RecommendController@recommendDetail'));

#微视
Route::get('micromovie', array('as' => 'micromovie', 'uses' =>'MicromovieController@micromovieIndex'));

#微视分页
Route::get('microm_sub', array('as' => 'microm_sub', 'uses' =>'MicromovieController@micromovieDetail'));

#个人中心
Route::get('personal', array('as' => 'personal', 'uses' =>'PersonalController@personalIndex'));

Route::get('get_photos', array('as' => 'get_photos', 'uses' =>'PhotosController@get_photos'));

Route::get('logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
/*------------------------------ajax 测试---------------------------------*/


/**
 * 前台功能性路由
 */

Route::get('test', function () {});//test
Route::get('upload', function(){
    return route('recommend');
});

//不需权限
Route::group(array('prefix' => 'home'), function()
{
    Route::get('literatrue', array('as' => 'home/literatrue','uses' => 'LiteratureController@test'));//ajax获取排序文学及分页
    Route::get('literatrue/comment', array('as' => 'home/literatrue/comment','uses' => 'LiteratureController@test'));//ajax获取文章评论

    Route::get('photos', array('as' => 'home/photos','uses' => 'LiteratureController@test'));//ajax获取排序图片及分页
    Route::get('photos/comment', array('as' => 'home/photos/comment','uses' => 'LiteratureController@test'));//ajax获取图片评论

    Route::get('micromovie', array('as' => 'home/micromovie','uses' => 'LiteratureController@test'));//ajax获取排序微视及分页
    Route::get('micromovie/comment', array('as' => 'home/micromovie/comment','uses' => 'LiteratureController@test'));//ajax获取微视评论

    Route::get('original', array('as' => 'home/original','uses' => 'LiteratureController@test'));//ajax获取原味页面
    Route::get('original/comment', array('as' => 'home/original/comment','uses' => 'LiteratureController@test'));//ajax获取原味评论

    Route::get('recommend', array('as' => 'home/recommend','uses' => 'LiteratureController@test'));//ajax获取排序读书影逝及分页
    Route::get('recommend/comment', array('as' => 'home/recommend/comment','uses' => 'LiteratureController@test'));//ajax获取读书影逝评论

    Route::post('register', array('as' => 'home/register','uses' => 'LoginController@register'));
    Route::post('login', array('as' => 'home/login','uses' => 'LoginController@login'));

});


//需权限 TODO:array('before' => 'auth')=>false;
Route::group(array('prefix' => 'home', 'before' => 'auth|verify_permission'), function()
{

    Route::post('comment/photos', array('as' => 'home/comment/photos','uses' => 'CommentController@comment'));//ajax爱拍发表评论

    Route::post('comment/micromovie', array('as' => 'home/comment/micromovie','uses' => 'CommentController@comment'));//ajax微视发表评论

    Route::post('comment/original', array('as' => 'home/comment/original','uses' => 'CommentController@comment'));//ajax原味发表评论

    Route::post('comment/recommend', array('as' => 'home/comment/recommend','uses' => 'CommentController@comment'));//ajax读书影逝发表评论

    //文学路由
    Route::post('literature/createpassage', array('as' => 'home/literature/createpassage','uses' => 'LiteratureController@createPassage'));//发表文章

    Route::post('comment/literatrue', array('as' => 'home/comment/literatrue','uses' => 'CommentController@comment'));//ajax文学发表评论

});




/**
 * 后台路由
 */
Route::group(array('prefix' => 'admin', 'before' => 'auth|verify_permission'), function()
{
    Route::get('index', array('as' => 'admin/index','uses' => 'HomeController@index'));//仪表盘

    Route::get('literature', array('as' => 'admin/literature','uses' => 'LiteraturemanageController@index'));//文学模块
    Route::post('literature/search', array('as' => 'admin/literature/search','uses' => 'LiteraturemanageController@search'));//文学模块
    Route::post('literature/manage', array('as' => 'admin/literature/manage','uses' => 'LiteraturemanageController@manage'));//文学模块

    Route::get('photos', array('as' => 'admin/photos','uses' => 'PhotosmanageController@index'));//爱拍模块
    Route::post('photos/albummanage', array('as' => 'admin/photos/albummanage','uses' => 'PhotosmanageController@albummanage'));//爱拍模块
    Route::post('photos/photomanage', array('as' => 'admin/photos/photomanage','uses' => 'PhotosmanageController@photomanage'));//爱拍模块

    Route::get('micromovie', array('as' => 'admin/micromovie','uses' => 'MicromoviemanageController@index'));//微视模块
    Route::post('micromovie/manage', array('as' => 'admin/micromovie/manage','uses' => 'MicromoviemanageController@manage'));//微视模块

    Route::get('recommend', array('as' => 'admin/recommend','uses' => 'RecommendmanageController@index'));//读书影逝模块
    Route::post('recommend/manage', array('as' => 'admin/recommend/manage','uses' => 'RecommendmanageController@manage'));//读书影逝模块
    Route::post('recommend/add', array('as' => 'admin/recommend/add','uses' => 'RecommendmanageController@add'));//读书影逝模块

    Route::get('original', array('as' => 'admin/original','uses' => 'OriginalmanageController@index'));//原味模块

    Route::get('comment', array('as' => 'admin/comment','uses' => 'CommentmanageController@index'));//评论模块
    Route::post('comment/manage', array('as' => 'admin/comment/manage','uses' => 'CommentmanageController@manage'));//评论模块

    Route::get('user', array('as' => 'admin/user','uses' => 'UsermanageController@index'));//用户模块
    Route::post('user/addgroup', array('as' => 'admin/user/addgroup','uses' => 'UsermanageController@addgroup'));//用户模块
    Route::post('user/delgroup', array('as' => 'admin/user/delgroup','uses' => 'UsermanageController@delgroup'));//用户模块
    Route::post('user/editgroup', array('as' => 'admin/user/editgroup','uses' => 'UsermanageController@editgroup'));//用户模块
    Route::post('user/delroute', array('as' => 'admin/user/delroute','uses' => 'UsermanageController@delroute'));//用户模块
    Route::post('user/addroute', array('as' => 'admin/user/addroute','uses' => 'UsermanageController@addroute'));//用户模块
    Route::post('user/manage', array('as' => 'admin/user/manage','uses' => 'UsermanageController@manage'));//用户模块

    Route::get('system', array('as' => 'admin/system','uses' => 'SystemmanageController@index'));//系统模块
    Route::post('system/addnav', array('as' => 'admin/system/addnav','uses' => 'SystemmanageController@addnav'));//系统模块添加导航
    Route::post('system/addroute', array('as' => 'admin/system/addroute','uses' => 'SystemmanageController@addroute'));//系统模块添加路由
    Route::post('system/delroute', array('as' => 'admin/system/delroute','uses' => 'SystemmanageController@delroute'));//系统模块删除路由
    Route::post('system/editroute', array('as' => 'admin/system/editroute','uses' => 'SystemmanageController@editroute'));//系统模块修改路由

});


