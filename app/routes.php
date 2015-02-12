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

#首页
Route::get('/', function()
{
	return View::make('template.home.home');
});

#爱拍
Route::get('/photos', function()
{
	return View::make('template.photos.photos');
});

#格子(暂时不能用)
Route::get('/grids', function()
{
    return View::make('template.grids.grids');
});

#文学
Route::get('/literatrue', function()
{
    return View::make('template.literatrue.literatrue');
});

#文学分页
Route::get('/litera_sub', function()
{
    return View::make('template.litera_sub.litera_sub');
});

#读书影逝
Route::get('/bookmovie', function()
{
    return View::make('template.bookmovie.bookmovie');
});

#微视
Route::get('/micromovie', function()
{
    return View::make('template.micromovie.micromovie');
});

#微视分页
Route::get('/microm_sub', function()
{
    return View::make('template.microm_sub.microm_sub');
});

#我话很多
Route::get('/discuss', function()
{
    return View::make('template.discuss.discuss');
});

#个人中心
Route::get('/personal', function()
{
    return View::make('template.personal.personal');
});



/**
 * 前台功能性路由
 */



//不需权限
Route::group(array('prefix' => 'home', 'before' => 'test'), function()
{
    Route::get('test1', array('as' => 'home/test','uses' => 'LiteratureController@test'));//test

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


});


//需权限 TODO:array('before' => 'auth')=>false;
Route::group(array('prefix' => 'home', /*'before' => 'auth'*/), function()
{

    Route::post('comment/literatrue', array('as' => 'home/comment/literatrue','uses' => ''));//ajax文学发表评论

    Route::post('comment/photos', array('as' => 'home/comment/photos','uses' => ''));//ajax图片发表评论

    Route::post('comment/micromovie', array('as' => 'home/comment/micromovie','uses' => ''));//ajax微视发表评论

    Route::post('comment/original', array('as' => 'home/comment/original','uses' => ''));//ajax原味发表评论

    Route::post('comment/recommend', array('as' => 'home/comment/recommend','uses' => ''));//ajax读书影逝发表评论

});




/**
 * 后台路由
 */
Route::group(array('prefix' => 'admin',/* 'before' => 'auth'*/), function()
{
    //后台首页
    Route::get('index', 'HomeController@index');

});