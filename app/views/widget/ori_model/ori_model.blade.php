<div class="m-ori_model f-cb js-model">
    <div class="g-orm f-fl">
        <div class="m-orc">
            <img src="" alt="" class="js-model_show"/>
            <div class="m-ocb"><span class="text js-model_name"></span><span class="love js-collect"><i class="fa fa-heart"></i>(<span class="js-love_num"></span>)</span></div>
        </div>
        <a href="" class="s-m_link js-more_link">查看详情</a>
        <p class="u-ainfo">作者:<span class="js-author"></span>  <span class="js-introduce"></span> </p>
    </div>
    <aside class="g-ors">
            <div class="m-comments_lists f-cb">
                <div class="js-w_comments"></div>
                <i class="s-loadding js-loading"></i>
            </div>
            <div class="m-c_page">
                <span class="prev js-prev">上一页</span>
                <span class="next js-next">下一页</span>
            </div>
            <div class="m-comment">
                <input type="text" class="js-data_input" placeholder="评论："/>
                <button class="f-fr js-comment">发表</button>
            </div>
    </aside>
</div>

<script type="text/template" id="temp_comment">
    <% data.forEach(function(f){%>
             <div class="item f-cb js-father" data-fn="<%=f.username%>" data-fi="<%=f.uid%>" data-ffi="<%=f.id%>">
                 <span class="author u-name"><%=f.username%>：</span>
                 <span class="content u-content"><%=f.content%></span>
                 <div class="m-reply_lists js-reply_lists">
                     <%f.reply.forEach(function (s){%>
                        <span class="from u-name"><%=s.from_name%></span>回复<span class="to u-name"><%=s.to_name%>：</span> <span class="reply_cotent u-content"><%=s.content%></span>
                        <br/>
                     <%})%>
                 </div>
                 <button class="f-fr js-reply">回复</button>
             </div>
    <%})%>
</script>

@section("css")
    @parent
    {{HTML::style("public/css/widget/ori_model/ori_model.css")}}
@stop