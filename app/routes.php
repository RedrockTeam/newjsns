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