{{--发表评论部分--}}
<form action="" class="m-litera_re_comment f-cb js-form_editor" tabindex="1"  method="POST">
   <input type="text" value="" class="u-input js-content"  placeholder="这里发表评论(最大字数为300字)"/>
   <input type="submit" class="u-submit"/>
</form>
@section("css")
    @parent
    {{HTML::style("public/css/widget/comment/comment.css")}}
@stop