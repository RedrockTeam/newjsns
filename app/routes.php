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
Route::get('/', function()
{
	return View::make('template.home.home');
});

#原味
Route::get('/original', function(){
    $data = [
        "page" => "original",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
        "print_lists" => [
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ]
        ],
        "opera_lists" => [
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ]
        ],
        "song_lists" => [
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ]
        ],
        "model_lists" => [
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ],
            [
                "icon_src" => "",
                "link_src" => "",
                "name" => "马云和阿里帝国"
            ]
        ]
    ];

    return View::make('template.original.original')->with($data);
});

#爱拍
Route::get('/photos', function()
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
Route::get('bookmovie', function()
{
    $data = [
        "page" => "bookmovie",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
        "bkmv_lists" => [
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ],
            [   "bkmv_icon_src" => "",
                "bkmv_name" => "好想为你做便当",
                "love_count" => 20,
                "comment_count" => 25
            ]
        ],
        "page_info" => [
            "show_pages_length" => 5,
            "page_start" => 4,
            "active_page" => 9
        ]
    ];
    return View::make('template.bookmovie.bookmovie')->with($data);
});

#微视
Route::get('micromovie', function()
{
    $data = [
        "page" => "micromovie",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
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
    $data = [
        "page" => "micromovie",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
        "microm_intro" => [
            "movie_name" => "山鬼",       //影片名称
            "movie_stars" => 4.5,        //影片星级
            "movie_author" => "倚窗听风", //影片作者
            "movie_date" => "2014-05-06", //影片创作时间
            "movie_detail" => "最近我从淘宝买什么都不顺。比如买透明手机壳，背后却有两个头皮屑似的的小白点，擦不去也抠不掉，套在黑色手机上，看都不顺眼。又比如买胸罩，颜色大小倒是合适的，可就是搭扣下缘走线有点硬，穿上后，感觉像有一枚不服帖的标签在后背来回硌应着。退换货一是麻烦，再是也剪了标。不要，多少又有点弃之可惜。我对着电脑上的一件天蓝色毛呢大衣，始终没勇气按下购买键。但要是迈开双腿进商场逛，一想我就先腿软了总是不自觉对她产生几分没来由的恭敬。" //影片详细信息

        ],
        "microm_hot" =>[
            [
                "movie_icon_src" =>"",
                "movie_name" => "兄妹",
                "love_count" => 20
            ],
            [
                "movie_icon_src" =>"",
                "movie_name" => "最佳损友",
                "love_count" => 20
            ]
        ],
        "movie_comments" =>[
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
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
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
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
    return View::make('template.microm_sub.microm_sub')->with($data);
});

#读书影逝分页
Route::get('/bkmv_sub', function()
{
    $data = [
        "page" => "bookmovie",
        "user_info" => [
            "user_name" => "李金鑫",
            "user_id" => "oijinxin_16@@@##1322%$^%"
        ],
        "main_info" => [
            "bkmv_name" => "祈祷落幕时",
            "bkmv_icon_src" => "",
            "bkmv_stars" => 4.5,
        ],
        "sec_info" => [
            "作者" => "东野圭吾",
            "价格" => "南海出版公司",
            "原标题" => "祈りの幕が下りる时",
            "译者" => "岱科",
            "出版日期" => "2015-1",
            "页数" => 296,
            "定价" => "36.59元"
        ],
        "bkmv_grief_intro" => "<h1>这里是简介</h1> <p>一个女人在廉价公寓里被杀，租公寓的人失去了踪影。房间里没有任何生的气息，住在里面似乎随时准备迎接死亡。案发现场找到了一本挂历，上面按月份写有东京十二座桥的名字。刑警加贺恭一郎顿时呆住：同样的东西也曾在他母亲的遗物中出现过。</p>",
        "bkmv_comments" => [
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
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
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
                    ]
                ]
            ],
            [
                'user_icon' => '',                  //用户头像路径
                'user_name' => '村里没有巧克力',      //用户姓名
                'comment_date' => '2014-05-06',           //评论时间
                'user_comment' => '在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来的情感，在真真切切地感受着。',  //用户评论内容
                'user_replys' =>[                  //第二层评论
                    [
                        'uesr_icon' => '',             // 用户头像路径
                        'user_name' => '村里没有蛋黄派', //用户姓名
                        'reply_to_name' => '哈哈哈',    //回复的姓名
                        'reply_content'=> '你自己',            //用户评论
                    ]
                ]
            ]
        ],
        "page_info" => [
            "show_pages_length" => 5,
            "page_start" => 4,
            "active_page" => 9
        ],
        "bkmv_recoms" => [
            [
                "main_info" =>[
                    "bkmv_icon_src" =>"",
                    "bkmv_name" => "兄妹",
                ],
                "sec_info" => [
                    "热门书评" => "《好想为你做便当》这本书不错..."
                ]
            ],
            [
                "main_info" =>[
                    "bkmv_icon_src" =>"",
                    "bkmv_name" => "兄妹",
                ],
                "sec_info" => [
                    "热门书评" => "《好想为你做便当》这本书不错..."
                ]
            ]
        ]
    ];
    return View::make('template.bkmv_sub.bkmv_sub')->with($data);
});

#个人中心
Route::get('/personal', function()
{
    $data = [
        "user_info" => [
            "main_info" => [
                "user_name" => "村里没有巧克力",
                "user_motto" => "一个没啥天赋却依旧学设计的白痴",
                "user_show_icon" => ""
            ],
            "sec_info" => [
                "生日" => "1994-8-15",
                "星座" => "处女座",
                "婚姻状况" => "单身",
                "邮箱" => "123456789@qq.com"
            ]
        ],
        "user_history" => [
            "his_date" => "2014-06-08",
            "his_content" => "<b>记录</b>"
        ]
    ];
    return View::make('template.personal.personal')->with($data);
});

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

Route::get('test', array( 'as' => 'home/test','uses' => 'RecommendController@RecommendIndex'));//test
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


