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
	return View::make('layout/home');
});

#爱拍
Route::get('/photos', function()
{
	return View::make('layout/photos');
});

#格子
Route::get('/grids', function()
{
    return View::make('layout/grids');
});

#文学
Route::get('/literatrue', function()
{
    return View::make('layout/literatrue');
});

#读书影逝
Route::get('/bookmovie', function()
{
    return View::make('layout/bookmovie');
});

#微视
Route::get('/microview', function()
{
    return View::make('layout/microview');
});

#我话很多
Route::get('/mywords', function()
{
    return View::make('layout/mywords');
});
