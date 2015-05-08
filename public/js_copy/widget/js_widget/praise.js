/**
 * Created by redrock on 2015/3/16.
 */
//收藏 爱拍，文学， 微视， 读书影逝
define([ "jquery", "port" ], function($) {
    $(function() {
        //代理
        /*--------事件处理函数------*/
        function praise(ev) {
            var $self = $(this), $ele = $self;
            ev.stopPropagation(), //hack 子层节点
            !$self.hasClass("js-praise") && ($ele = $self.parent(".js-praise")), data = {
                type_id: $ele.attr("data-type_id"),
                passage_id: $ele.attr("data-passage_id")
            }, ajax.call($ele, data);
        }
        /*ajax*/
        function ajax(data) {
            var $self = $(this);
            $.ajax({
                url: "home/comment/collect",
                method: "POST",
                dataType: "json",
                data: data,
                success: function(res) {
                    if ("object" != typeof res) try {
                        res = JSON.parse(res);
                    } catch (err) {
                        alert("error数据错误!!!");
                    }
                    res.success ? (console.log(res.info), controlParise.call($self, res.info)) : res.error && alert(res.error);
                },
                error: function(err) {
                    alert("收藏失败!!!"), alert(err.responseText);
                }
            });
        }
        /*收藏或取消收藏*/
        function controlParise(isCollect) {
            var $self = $(this), $heart = $self.find(".js-show_love"), $num = $self.find(".js-num"), tag = !0;
            if (($num.lentgh < 1 || $heart.length < 1) && (tag = !1), tag) var num = $num.text().slice(1, $self.text().length - 1);
            isCollect ? tag && $num.text("(" + (parseInt(num) + 1) + ")") : (tag && $num.text("(" + (parseInt(num) - 1) + ")"), 
            $heart.removeClass("s-active"));
        }
        $("body").on("click", ".js-praise,.js-num,.js-show_love", praise);
    });
});