{{--首页格子导航部分--}}
<div class="m-home_square">
    <div class="u-logo"></div>
    <ul class="u-squares">
        <li class="u-square_item">
            <a href="/literatrue" class="s-wrap"></a>
            <p class="u-title">
                <a href="/literatrue">
                    <span>文学</span>
                    <span>literatrue</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="/photos" class="s-wrap"></a>
            <p class="u-title">
                <a href="/photos">
                    <span>爱拍</span>
                    <span>photograph</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="/bookmovie" class="s-wrap"></a>
            <p class="u-title">
                <a href="/bookmovie">
                    <span>读书·影逝</span>
                    <span>read&movie</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="/micromovie" class="s-wrap"></a>
            <p class="u-title">
                <a href="/micromovie">
                    <span>微视</span>
                    <span>micro film</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="/original" class="s-wrap"></a>
            <p class="u-title">
                <a href="/original">
                    <span>原味</span>
                    <span>original</span>
                </a>
            </p>
        </li>
        <li class="u-square_item">
            <a href="/personal" class="s-wrap"></a>
            <p class="u-title">
                <a href="/personal">
                    <span>个人中心</span>
                    <span>personal</span>
                </a>
            </p>
        </li>

        <li class="u-square_item js-open_login_box">
            <p class="u-title">
                @if(Session::get('nickname'))
                    <a href="{{route('index')}}"><span>{{Session::get('nickname')}}</span></a>
                @else
                    <span>登陆/注册</span>
                @endif
            </p>
        </li>
    </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/square/square.css")}}
@stop
