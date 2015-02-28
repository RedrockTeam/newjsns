<div class="js-waterfall">

</div>
{{--template 模板--}}
<script type="text/template" id="js-photo_temp">
     <div class="wf_item_inner">
        <a href="<%= data.img_src%>" class="thumb js-open_box js-link" target="_blank" title="<%= data.img_desc%>" data-type="<%= data.img_type%>">
            <img class="thumb_img"  src="<%= data.img_src%>"/>
            <p class="u-name"><%= data.img_name%></p>
        </a>
        <%if(data.img_type == "album") {%>
            <%for(var i = 0; i < data.img_detail.length; i++){%>
                <a class="js-link" style="display: none" href="<%= data.img_detail[i].img_src %>" title="<%= data.img_detail[i].img_desc%>"></a>
            <%}%>
        <%}%>
        <div class="u-action"><a class="u-show_comments">(<%= data.comment_count%>)</a><a class="u-show_love">(<%= data.love_count%>)</a></div>
     </div>
</script>
@section("css")
    @parent
    {{HTML::style("public/css/widget/photos_list/photos_list.css")}}
@stop