<div class="m-his_work">{{--我的作品  默认打开--}}
    <div class="u-work_item s-item">
        <h6 class="u-work_date s-date">2014-12-6</h6>
        <article class="s-article">
            <h2 class="s-title">#这里是作品标题</h2>
            <p class="s-content">这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本vvvvv</p>
        </article>
    </div>
    <div class="u-work_item s-item">
            <h6 class="u-work_date s-date">2014-12-6</h6>
            <div class="s-article">
                <h2 class="s-title">#这里是标题</h2>
                <p class="s-content">
                    <img src="public/images/1.png" alt=""/>
                </p>
            </div>
        </div>
</div>

<div class="m-his_collect js-his_collect">  {{--我的收藏 默认关闭--}}
    <div class="u-work_item s-item">
            <h6 class="u-work_date s-date">2014-12-6</h6>
            <article class="s-article">
                <h2 class="s-title">#这里是收藏标题</h2>
                <p class="s-content">这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本这里是文本vvvvv</p>
            </article>
    </div>
        <div class="u-work_item s-item">
                <h6 class="u-work_date s-date">2014-12-6</h6>
                <div class="s-article">
                    <h2 class="s-title">#这里是标题</h2>
                    <p class="s-content">
                        <img src="public/images/1.png" alt=""/>
                    </p>
                </div>
        </div>
</div>
<div class="m-his_comments js-hs_comments">   {{--我的评论 默认关闭--}}
    <div class="u-sort_comments"><a href="" class="s-active">收到的评论</a>/<a href="">发出的评论</a></div>
    <div class="u-comments_item s-item">
        <h6 class="s-date">2014-12-6</h6>
        <div class="u-show_comments">
            <div class="u-img_show" style="background-image: url('')"></div>  {{--在此表签url上添加url--}}
            <aside class="u-comments_aside">
                <h3 class="u-user_nickname">村里没有巧克力</h3>
                <p class="u-content">在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时
                                      隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来
                                      的情感，在真真切切地感受着。</p>
                <span class="u-article_title">评论我的文章：《球场的记亿》</span>
            </aside>
        </div>
    </div>
    <div class="u-comments_item s-item">
            <h6 class="s-date">2014-12-6</h6>
            <div class="u-show_comments">
                <div class="u-img_show" style="background-image: url('')"></div>  {{--在此表签url上添加url--}}
                <aside class="u-comments_aside">
                    <h3 class="u-user_nickname">村里没有巧克力</h3>
                    <p class="u-content">在地铁上看完了第二个故事，故事的结局几乎是很快速地扫过。不敢一字一句地仔细体会，时
                                          隔多久，在看书的时候，让我要忍住眼泪呢？穿越时间和空间的感动，从印刷体中所表达出来
                                          的情感，在真真切切地感受着。</p>
                    <span class="u-article_title">评论我的文章：《球场的记亿》</span>
                </aside>
            </div>
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_history/personal_history.css")}}
@stop