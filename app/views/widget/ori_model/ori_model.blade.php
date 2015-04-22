<div class="m-ori_model f-cb js-model">
    <div class="g-orm f-fl">
        <div class="m-orc">
            <img src="" alt="" class="js-model_show"/>
            <div class="m-ocb"><span class="text">怀念高三苦逼的怀念高三苦逼的怀念高三苦逼的怀念高三苦逼的怀念高三苦逼的岁月</span><span class="love js-collect"><i class="fa fa-heart"></i>(<span class="js-love_num"></span>)</span></div>
        </div>
        <p class="u-ainfo">作者:<span class="js-author"></span>  <span class="js-introduce"></span> </p>
    </div>
    <aside class="g-ors">
            <div class="m-comments_lists f-cb">
                <i class="s-loadding js-loading"></i>
            </div>
            <div class="m-comment">
            <input type="text" class="js-data_input" placeholder="评论："/>
            <button class="f-fr js-comment">发表</button>
            </div>
    </aside>
</div>

<script type="text/template" id="temp_comment">
    <% data.forEach(function(f){%>
             <div class="item f-cb">
                 <span class="author u-name"><%=f.from%>：</span>
                 <span class="content u-content"><%=f.content%></span>
                 <div class="m-reply_lists js-reply_lists">
                     <%f.reply.forEach(function (s){%>
                        <span class="from u-name"><%=s.from%></span>回复<span class="to u-name"><%=s.to%>：</span> <span class="reply_cotent u-content"><%=s.content%></span>
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