<div class="m-microm_play">
    <embed id="" height="350" width="670" allowscriptaccess="never" style="visibility:visible;" pluginspage="http://get.adobe.com/cn/flashplayer/" flashvars="playMovie=true&amp;auto=1&amp;autostart=true" width="482" allowfullscreen="true" quality="high" src="{{{strip_tags($data['movie']['url'])}}}" type="application/x-shockwave-flash" wmode="transparent">
</div>

@section("css")
    @parent
    {{HTML::style("public/css/widget/microm_play/microm_play.css")}}
@stop