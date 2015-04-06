<div class="m-his_work js-his_work">{{--我的作品  默认打开--}}
    @foreach($data['works'] as $work)
        @if($work['table'] == 'literature')
            <div class="u-work_item s-item">
                <h6 class="u-work_date s-date">{{$work['updated_at']}}</h6>
                <article class="s-article">
                    <a href="litera_sub?passage_id={{$work['id']}}&type_id={{$work['type_id']}}"><h2 class="s-title">{{$work['title']}}</h2></a>
                    <p class="s-content">{{str_limit($work['content'], 300)}}</p>
                </article>
            </div>
        @elseif($work['table'] == 'micromovie')
            <div class="u-work_item s-item">
                    <h6 class="u-work_date s-date">{{$work['updated_at']}}</h6>
                    <div class="s-article">
                        <a href="microm_sub?passage_id={{$work['id']}}&type_id={{$work['type_id']}}"> <h2 class="s-title">{{$work['title']}}</h2></a>
                        <p class="s-content">
                            <img src="{{$work['cover_url']}}" alt=""/>
                        </p>
                    </div>
                </div>
        @else
            <div class="u-work_item s-item">
                <a href="">
                    <h6 class="u-work_date s-date">{{$work['updated_at']}}</h6>
                    <div class="s-article">
                        <h2 class="s-title">{{$work['title']}}</h2>
                        <p class="s-content">
                            <img src="{{$work['url']}}" alt=""/>
                        </p>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>

<div class="m-his_collect js-his_collect">  {{--我的收藏 默认关闭--}}
    @foreach($data['collection'] as $collection)
        @if($collection['table'] == 'literature')
            <div class="u-work_item s-item">
                <h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>
                <article class="s-article">
                    <a href="litera_sub?passage_id={{$work['id']}}&type_id={{$work['type_id']}}"><h2 class="s-title">{{$collection['title']}}</h2></a>
                    <p class="s-content">{{str_limit($collection['content'], 300)}}</p>
                </article>
            </div>
        @elseif($collection['table'] == 'micromovie')
            <div class="u-work_item s-item">
                <h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>
                <div class="s-article">
                    <a href="microm_sub?passage_id={{$work['id']}}&type_id={{$work['type_id']}}"><h2 class="s-title">{{$collection['title']}}</h2></a>
                    <p class="s-content">
                        <img src="{{$collection['cover_url']}}" alt=""/>
                    </p>
                </div>
            </div>
        @else
            <div class="u-work_item s-item">
                <a href="">
                    <h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>
                    <div class="s-article">
                        <h2 class="s-title">{{$collection['title']}}</h2>
                        <p class="s-content">
                            <img src="{{$collection['url']}}" alt=""/>
                        </p>
                    </div>
                </a>
            </div>
        @endif
    @endforeach
</div>
<div class="m-his_comments js-his_comments">   {{--我的评论 默认关闭--}}
    <div class="u-sort_comments"><a href="" class="s-active">收到的评论</a>/<a href="">发出的评论</a></div>
    {{--收到的评论--}}
    @foreach($data['from'] as $post)
        <div class="u-comments_item s-item">
            <h6 class="s-date">{{$post['updated_at']}}-12-6</h6>
            <div class="u-show_comments">
                <div class="u-img_show" style="background-image: url('')"></div>  {{--在此表签url上添加url--}}
                <aside class="u-comments_aside">
                    <h3 class="u-user_nickname">{{$post['username']}}</h3>
                    <p class="u-content">{{$post['content']}}</p>
                    {{--<span class="u-article_title">评论我的文章：《球场的记亿》</span>--}}
                </aside>
            </div>
        </div>
    @endforeach
    {{--发出的评论--}}
    @foreach($data['to'] as $get)
    <div class="u-comments_item s-item">
            <h6 class="s-date">{{$get['updated_at']}}</h6>
            <div class="u-show_comments">
                <div class="u-img_show" style="background-image: url('')"></div>  {{--在此表签url上添加url--}}
                <aside class="u-comments_aside">
                    <h3 class="u-user_nickname">{{$get['username']}}</h3>
                    <p class="u-content">{{$get['content']}}</p>
                    {{--<span class="u-article_title">评论我的文章：《球场的记亿》</span>--}}
                </aside>
            </div>
    </div>
    @endforeach
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/personal_history/personal_history.css")}}
@stop