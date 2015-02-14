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
    $data = [
        "litera_recom_items" => [
            [
                "title" => "俯视",
                "content" => "一步之遥翻拍"
            ],
            [
                "title" => "文学",
                "content" => "有些事一辈子也不会做了"
            ],
            [
                "title" => "俯视",
                "content" => "阳光下的泡沫"
            ],
            [
                "title" => "俯视",
                "content" => "一步之遥翻拍"
            ],
            [
                "title" => "文学",
                "content" => "有些事一辈子也不会做了"
            ],
            [
                "title" => "俯视",
                "content" => "阳光下的泡沫"
            ],
            [
                "title" => "俯视",
                "content" => "一步之遥翻拍"
            ],
            [
                "title" => "文学",
                "content" => "有些事一辈子也不会做了"
            ],
            [
                "title" => "俯视",
                "content" => "阳光下的泡沫"
            ],
            [
                "title" => "俯视",
                "content" => "一步之遥翻拍"
            ],
            [
                "title" => "文学",
                "content" => "有些事一辈子也不会做了"
            ],
            [
                "title" => "俯视",
                "content" => "阳光下的泡沫"
            ]
        ],
        "litera_comments_items" => [
            [
                "comments_img_src" =>"",
                "title" => "篮球的记忆",
                "author" => "文/倚窗听风",
                "content" => "又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。 “没事吧！”“对不起啊，同学。”“要不你下去休息了脑袋，昏沉沉地倒了下去。 阿斯“没事吧！”“对不起啊，同学。”“要不你下去休息",
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                "comments_img_src" =>"",
                "title" => "篮球的记忆",
                "author" => "文/倚窗听风",
                "content" => "又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。 “没事吧！”“对不起啊，同学。”“要不你下去休息了脑袋，昏沉沉地倒了下去。 阿斯“没事吧！”“对不起啊，同学。”“要不你下去休息",
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                "comments_img_src" =>"",
                "title" => "篮球的记忆",
                "author" => "文/倚窗听风",
                "content" => "又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。 “没事吧！”“对不起啊，同学。”“要不你下去休息了脑袋，昏沉沉地倒了下去。 阿斯“没事吧！”“对不起啊，同学。”“要不你下去休息",
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                "comments_img_src" =>"",
                "title" => "篮球的记忆",
                "author" => "文/倚窗听风",
                "content" => "又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。 “没事吧！”“对不起啊，同学。”“要不你下去休息了脑袋，昏沉沉地倒了下去。 阿斯“没事吧！”“对不起啊，同学。”“要不你下去休息",
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                "comments_img_src" =>"",
                "title" => "篮球的记忆",
                "author" => "文/倚窗听风",
                "content" => "又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。 “没事吧！”“对不起啊，同学。”“要不你下去休息了脑袋，昏沉沉地倒了下去。 阿斯“没事吧！”“对不起啊，同学。”“要不你下去休息",
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ]
        ],
        "page_info" => [
            "show_pages_length" => 5,
            "page_start" => 4,
            "active_page" => 9
        ]
    ];
    return View::make('template.literatrue.literatrue')->with($data);
});

#文学分页
Route::get('/litera_sub', function()
{
    $data = [
        'article_detail' => [
            'article_title' => '谁没有一些搁浅的梦想和爱情',  //文章标题
            'article_date' => '2014-12-6',                  //文章时间
            'article_author' => '树上村树',                  //文章作者
            'article_content' => '<b>这是文章内容</b><br/><b>两个人分手了，最悲伤的可能是一条狗。2013年的夏天，有天下班，大雨滂沱，我开车路过雁南路，看见我的小闺蜜段思思和她的古牧芭蕾在她家小区门口的站牌那拉锯战。段思思要拉芭蕾回家，而芭蕾不肯，赖死赖活趴倒在站牌底下，一人一狗，形同角力。大雨里，段思思终于受不了，撒手把狗绳松开，蹲在芭蕾身旁边，哭得不成人形。我在车里看着她们，缓缓开离，没有停车。段思思那一刻的脆弱不想被尴尬撞破，她那一刻难能放任的哭泣也并不需要被打扰。我知道，芭蕾是在等周子恺。</b>'//文章内容,由html标签组成,
        ],
        'article_comments' =>[                       //第一层评论
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'user_icon' => '',                    // 用户头像路径
                        'user_name' => '村里没有蛋黄派',        //用户姓名
                        'reply_to_name' => '哈哈哈',              //回复的姓名
                        'reply_content'=> '你自己',             //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'user_comment'=> '你自己语文没学好吧',  //用户评论
                        'reply_content'=> '你自己'            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'user_comment'=> '你自己语文没学好吧',  //用户评论
                        'reply_content'=> '你自己'            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'user_comment'=> '你自己语文没学好吧',  //用户评论
                        'reply_content'=> '你自己'            //用户评论
                    ]
                ]
            ]
        ],
        "page_info" => [
            "show_pages_length" => 5,
            "page_start" => 4,
            "active_page" => 9
        ]
    ];
    return View::make('template.litera_sub.litera_sub')->with($data);
});

#读书影逝
Route::get('/bookmovie', function()
{
    return View::make('template.bookmovie.bookmovie');
});

#微视
Route::get('/micromovie', function()
{
    $data = [
        'movie_info' => [
            [
                'movie_chow_icon' => '',      //影片图片
                'movie_name' => '山鬼',       //影片名字
                'movie_stars' => 3.5,          //影片星级  0.5为半分
                'movie_author' => '倚窗听风', //影片作者
                'movie_date' => '2014-12-6', //影片创作时间
                'movie_intro' => '又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。“没事吧！”...',  //影片简介
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                'movie_chow_icon' => '',      //影片图片
                'movie_name' => '山鬼',       //影片名字
                'movie_stars' => 3.5,          //影片星级  0.5为半分
                'movie_author' => '倚窗听风', //影片作者
                'movie_date' => '2014-12-6', //影片创作时间
                'movie_intro' => '又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。“没事吧！”...',  //影片简介
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ],
            [
                'movie_chow_icon' => '',      //影片图片
                'movie_name' => '山鬼',       //影片名字
                'movie_stars' => 3.5,          //影片星级  0.5为半分
                'movie_author' => '倚窗听风', //影片作者
                'movie_date' => '2014-12-6', //影片创作时间
                'movie_intro' => '又一次挺着我的大肚皮踏上篮球场，倔强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来强地不承认，我的青春已经所剩无几。缓慢的跑动，几乎不离开地面的跳跃，终于让飞来的皮球击中了脑袋，昏沉沉地倒了下去。“没事吧！”...',  //影片简介
                "comments_count" => 32,
                "comments_expand_link" => "",
                "love_count" => 50
            ]
        ],
        'page_info' => [
            "show_pages_length" => 5,
            "page_start" => 4,
            "active_page" => 9
        ]
    ];
    return View::make('template.micromovie.micromovie')->with($data);
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

Route::get('test', array('as' => 'home/test','uses' => 'PhotosController@index'));//test
Route::post('upload', array('uses' => 'PhotosController@upload'));

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



    Route::post('comment/photos', array('as' => 'home/comment/photos','uses' => ''));//ajax图片发表评论

    Route::post('comment/micromovie', array('as' => 'home/comment/micromovie','uses' => ''));//ajax微视发表评论

    Route::post('comment/original', array('as' => 'home/comment/original','uses' => ''));//ajax原味发表评论

    Route::post('comment/recommend', array('as' => 'home/comment/recommend','uses' => ''));//ajax读书影逝发表评论

    //文学路由
    Route::post('literature/createpassage', array('as' => 'home/literature/createpassage','uses' => 'LiteratureController@createPassage'));//发表文章

    Route::post('comment/literatrue', array('as' => 'home/comment/literatrue','uses' => ''));//ajax文学发表评论

});




/**
 * 后台路由
 */
Route::group(array('prefix' => 'admin',/* 'before' => 'auth'*/), function()
{
    //后台首页
    Route::get('index', 'HomeController@index');

});


