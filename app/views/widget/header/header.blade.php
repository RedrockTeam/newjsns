<div class="g-header_wrapper">
    <nav class="m-header f-cb">
        <i class="u-h_logo f-fl"></i>
        <ul class="u-h_nav f-fr">
            <li><a href="/">首页</a></li>
            <?php $page = Route::currentRouteName();?>
            <li @if($page == "literature") class="s-active"@endif ><a href="literature">文学</a></li>
            <li @if($page == "photos") class="s-active"@endif ><a href="photos">爱拍</a></li>
            <li @if($page == "recommend") class="s-active"@endif ><a href="bookmovie">读书·影逝</a></li>
            <li @if($page == "micromovie") class="s-active"@endif ><a href="micromovie">微视</a></li>
            <li @if($page == "original") class="s-active"@endif ><a href="original">原味</a></li>
        </ul>
    </nav>
</div>
@section("css")
    @parent
    {{HTML::style("public/css/widget/header/header.css")}}
@stop