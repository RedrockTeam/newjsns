{{--首页格子导航部分--}}
<div class="m-home_square">
    <div class="u-logo"></div>
    <ul class="u-squares">
        <li class="u-square_item">
            <a href="/literatrue" class="s-wrap"></a>
            <p class="u-title">
                <a href="/literature">
                    <span>文学</span>
                    <span>literature</span>
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

        <li class="u-square_item">
            <p class="u-title">
                @if(Session::get('nickname'))
                    <a href="{{route('personal')}}"><span>{{Session::get('nickname')}}</span></a>
                @else
                    <a class="u-link-other" href="/login-register">登陆/注册</a>
                @endif
            </p>
        </li>
    </ul>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/square/square.css")}}
@stop
