<div class="m-his_work js-his_work">{{--我的作品  默认打开--}}
    @if($data['works'])
    @foreach($data['works'] as $work)
        @if($work['table'] == 'literature' && isset($work['updated_at']))
            <div class="u-work_item s-item">
                <h6 class="u-work_date s-date">{{$work['updated_at']}}</h6>
                <article class="s-article">
                    <a class="s-content_wrap" href="{{route('litera_sub')}}?passage_id={{$work['id']}}&type_id={{$work['type_id']}}">
                        <h2 class="s-title">{{$work['title']}}</h2>
                        <p class="s-content">{{str_limit(strip_tags($work['content']), 100, '...')}}</p>
                    </a>
                </article>
            </div>
        @elseif($work['table'] == 'micromovie' && isset($work['updated_at']))
            <div class="u-work_item s-item">
                    <h6 class="u-work_date s-date">{{$work['updated_at']}}</h6>
                    <div class="s-article">
                        <a href="{{route('microm_sub')}}?passage_id={{$work['id']}}&type_id={{$work['type_id']}}"> <h2 class="s-title">{{{$work['title']}}}</h2></a>
                        <p class="s-content">
                            <img src="{{$work['cover_url']}}" alt=""/>
                        </p>
                    </div>
                </div>
        @else
            @if( isset($work['updated_at']))
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
        @endif
    @endforeach
        @else
        @endif
</div>

<div class="m-his_collect js-his_collect">  {{--我的收藏 默认关闭--}}
    @if($data['collection'])
    @foreach($data['collection'] as $collection)
        @if($collection['table'] == 'literature' && isset($collection['updated_at']))
                <a href="#">
                    <div class="u-work_item s-item">
                        <h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>
                        <article class="s-article">
                            <a href="{{route('litera_sub')}}?passage_id={{$collection['id']}}&type_id={{$collection['type_id']}}" class="s-content_wrap">
                                <h2 class="s-title">{{{$collection['title']}}}</h2>
                                <p class="s-content">{{str_limit(strip_tags($collection['content']), 100)}}</p>
                            </a>
                        </article>
                    </div>
                </a>
        @elseif($collection['table'] == 'micromovie' && isset($collection['updated_at']))
                    <div class="u-work_item s-item">
                        <h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>
                        <div class="s-article">
                            <a href="{{route('microm_sub')}}?passage_id={{$collection['id']}}&type_id={{$collection['type_id']}}" class="s-content_wrap">
                                 <h2 class="s-title">{{{$collection['title']}}}</h2>
                                <p class="s-content">
                                                    <img src="{{$collection['cover_url']}}" alt=""/>
                                </p>
                            </a>
                        </div>
                    </div>
        @else
            {{--@if(isset($collection['updated_at']))--}}
            {{--<div class="u-work_item s-item">--}}
                {{--<a href="{{route('photos')}}">--}}
                    {{--<h6 class="u-work_date s-date">{{$collection['updated_at']}}</h6>--}}
                    {{--<div class="s-article">--}}
                        {{--<h2 class="s-title">{{{$collection['album_name']}}}</h2>--}}
                        {{--<p class="s-content">--}}
                            {{--<img src="{{$collection['url']}}" alt=""/>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{--</div>--}}
                {{--@else--}}
                {{--@endif--}}
        @endif
    @endforeach
        @else
        @endif
</div>
<div class="m-his_comments js-his_comments">   {{--我的评论 默认关闭--}}
    <div class="u-sort_comments js-reply_tabs"><a href="javascript:void(0)" class="s-active">收到的评论</a>/<a href="javascript:void(0)">发出的评论</a></div>
    {{--收到的评论--}}
    <div class="js-get_reply">
    @foreach($data['to'] as $post)
            <div class="u-comments_item s-item">
                <h6 class="s-date">{{$post['updated_at']}}</h6>
                <div class="u-show_comments">
                    <div class="u-img_show" style="background-image: url('{{$post['head']}}')"></div>
                    <aside class="u-comments_aside">
                        <h3 class="u-user_nickname">{{{$post['username']}}}</h3>
                        <p class="u-content">{{{$post['content']}}}</p>
                    </aside>
                </div>
            </div>
        @endforeach
    </div>
    {{--发出的评论--}}
    <div class="f-dn js-post_reply">
    @foreach($data['from'] as $get)
        <div class="u-comments_item s-item">
                <h6 class="s-date">{{$get['updated_at']}}</h6>
                <div class="u-show_comments">
                    <div class="u-img_show" style="background-image: url('{{$get['head']}}')"></div>
                    <aside class="u-comments_aside">
                        <h3 class="u-user_nickname">{{{$get['username']}}}</h3>
                        <p class="u-content">{{{$get['content']}}}</p>
                    </aside>
                </div>
        </div>
        @endforeach
    </div>
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/personal_history/personal_history.css", [], true)}}
@stop