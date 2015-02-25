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
Route::get('/', function() {
	return View::make('template.home.home');
});

#原味
Route::get('original', array('as' => 'original', 'uses' => 'OriginalController@originalIndex'));

#爱拍
Route::get('photos', function()
{
    $data = [
        "page" => "photos",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
        "ph_lists" => [
            "fir_col" => [
                [
                    "img_src" => ['public/images/test_1.png', 'public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "三张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_3.png'],
                    "img_name" => "一张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ]
            ],
            "sec_col" => [
                [
                    "img_src" => ['public/images/test_3.png'],
                    "img_name" => "一张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_1.png', 'public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "三张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ]
            ],
            "thir_col" => [
                [
                    "img_src" => ['public/images/test_3.png'],
                    "img_name" => "一张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_1.png', 'public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "三张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ]
            ],
            "four_col" => [
                [
                    "img_src" => ['public/images/test_3.png'],
                    "img_name" => "一张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_1.png', 'public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "三张",
                    "comment_count" => 20,
                    "love_count" => 20
                ],
                [
                    "img_src" => ['public/images/test_2.png', 'public/images/test_3.png'],
                    "img_name" => "两张",
                    "comment_count" => 20,
                    "love_count" => 20
                ]
            ]
        ]
    ];
	return View::make('template.photos.photos')->with($data);
});

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

/*------------------------------ajax 测试---------------------------------*/
Route::get('/get_photos', function(){
    $data = [
        "success" => true,
        "isDrain" => false,
        "data" => [
            [
                "img_src" => ['public/images/test_1.png'],
                "img_name" => "三张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_2.png'],
                "img_name" => "两张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_3.png'],
                "img_name" => "一张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_2.png'],
                "img_name" => "两张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_1.png'],
                "img_name" => "两张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_3.png'],
                "img_name" => "两张",
                "comment_count" => 20,
                "love_count" => 20
            ],
            [
                "img_src" => ['public/images/test_1.png', 'public/images/test_2.png'],
                "img_name" => "三张",
                "comment_count" => 20,
                "love_count" => 20
            ],
        ]
    ];

    return Response::json($data);
});

/**
 * 前台功能性路由
 */

Route::get('test', 'LiteraturemanageController@index');//test
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


});


//需权限 TODO:array('before' => 'auth')=>false;
Route::group(array('prefix' => 'home', /*'before' => 'auth|verify_permission'*/), function()
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
Route::group(array('prefix' => 'admin',/* 'before' => 'auth'*/), function()
{
    Route::get('index', array('as' => 'admin/index','uses' => 'HomeController@index'));//仪表盘
    Route::get('literature', array('as' => 'admin/literature','uses' => 'LiteraturemanageController@index'));//文学模块
    Route::get('photos', array('as' => 'admin/photos','uses' => 'PhotosmanageController@index'));//爱拍模块
    Route::get('micromovie', array('as' => 'admin/micromovie','uses' => 'MicromoviemanageController@index'));//微视模块
    Route::get('recommend', array('as' => 'admin/recommend','uses' => 'RecommendmanageController@index'));//读书影逝模块
    Route::get('original', array('as' => 'admin/original','uses' => 'OriginalmanageController@index'));//原味模块
    Route::get('comment', array('as' => 'admin/comment','uses' => 'CommentmanageController@index'));//评论模块
    Route::get('user', array('as' => 'admin/user','uses' => 'UsermanageController@index'));//用户模块
    Route::get('system', array('as' => 'admin/system','uses' => 'SystemmanageController@index'));//系统模块
});


