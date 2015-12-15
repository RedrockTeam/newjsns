{{--首页格子导航部分--}}
<div class="m-home_square">
    <div class="u-logo"></div>
    <ul class="u-squares">
        <li class="u-square_item">
            <a href="{{route('literature')}}" class="s-wrap"></a>
            <p class="u-title">
                <a href="{{route('literature')}}">
                    <span>文学</span>
                    <span>Literature</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="{{route('photos')}}" class="s-wrap"></a>
            <p class="u-title">
                <a href="{{route('photos')}}">
                    <span>爱拍</span>
                    <span>Photograph</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="{{route('recommend')}}" class="s-wrap"></a>
            <p class="u-title">
                <a href="{{route('recommend')}}">
                    <span>读书·影逝</span>
                    <span>Read&Movie</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="{{route('micromovie')}}" class="s-wrap"></a>
            <p class="u-title">
                <a href="{{route('micromovie')}}">
                    <span>微视</span>
                    <span>Micromoive</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="{{route('original')}}" class="s-wrap"></a>
            <p class="u-title">
                <a href="{{route('original')}}">
                    <span>原味</span>
                    <span>Original</span>
                </a>
            </p>
        </li>
        {{--<li class="u-square_item">--}}
            {{--<a href="{{route('personal')}}" class="s-wrap"></a>--}}
            {{--<a href="http://hongyan.cqupt.edu.cn" class="s-wrap"></a>--}}
            {{--<p class="u-title">--}}
                {{--<a href="{{route('home/uploads')}}">--}}
                    {{--<span>红岩</span>--}}
                    {{--<span>redrock</span>--}}
                {{--</a>--}}
            {{--</p>--}}
            {{--<p class="u-title">--}}
                            {{--<a href="http://hongyan.cqupt.edu.cn">--}}
                                {{--<span>发表</span>--}}
                                {{--<span>Release</span>--}}
                            {{--</a>--}}
             {{--</p>--}}
        {{--</li>--}}

        <li class="u-square_item">
            <p class="u-title">
                @if(Session::get('nickname'))
                    <a href="{{route('personal')}}"><span>{{Session::get('nickname')}}</span></a>
                @else
                    <a class="u-link-other" href="{{route('login')}}">登陆/注册</a>
                @endif
            </p>
        </li>
    </ul>
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/square/square.css", [], true)}}
@stop
