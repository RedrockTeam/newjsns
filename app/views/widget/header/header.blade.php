<div class="g-header_wrapper">
    <nav class="m-header f-cb">
        <i class="u-h_logo f-fl"></i>
        <ul class="u-h_nav f-fr">
            <li><a href="{{route('index')}}">首页</a></li>
            <?php $page = Route::currentRouteName();?>
            <li @if($page == "literature") class="s-active"@endif ><a href="{{route('literature')}}">文学</a></li>
            <li @if($page == "photos") class="s-active"@endif ><a href="{{route('photos')}}">爱拍</a></li>
            <li @if($page == "recommend") class="s-active"@endif ><a href="{{route('recommend')}}">读书·影逝</a></li>
            <li @if($page == "micromovie") class="s-active"@endif ><a href="{{route('micromovie')}}">微视</a></li>
            <li @if($page == "original") class="s-active"@endif ><a href="{{route('original')}}">原味</a></li>
        </ul>
    </nav>
</div>
@section("css")
    @parent
    {{HTML::style("css/widget/header/header.css", [], true)}}
@stop