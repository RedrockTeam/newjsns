/**
 * Created by redrock on 2015/3/16.
 */
//点赞 爱拍，文学， 微视， 读书影逝
define([ "jquery", "port" ], function($, port) {
    $(function() {
        //代理
        /*--------事件处理函数------*/
        function praise(ev) {
            var $self = $(this), $ele = $self;
            ev.stopPropagation(), //hack 子层节点
            !$self.hasClass("js-praise") && ($ele = $self.parent(".js-praise")), data = {
                type_id: $ele.attr("data-type_id"),
                passage_id: $ele.attr("data-passage_id")
            }, console.log(data), ajax.call($ele, {
                name: "lijinxin"
            });
        }
        /*ajax*/
        function ajax(data) {
            var $self = $(this);
            $.ajax({
                url: port.praise,
                method: "POST",
                dataType: "json",
                data: data,
                success: function(res) {
                    if ("object" != typeof res) try {
                        res = JSON.parse(res);
                    } catch (err) {
                        alert("error数据错误!!!");
                    }
                    res.success ? controlParise.call($self) : alert(res.err ? res.err : "点赞失败!!!!");
                },
                error: function(err) {
                    alert("点赞失败!!!"), alert(err.responseText);
                }
            });
        }
        /*点赞或取消点赞*/
        function controlParise() {
            var $self = $(this), $heart = $self.find(".js-show_love"), $num = $self.find(".js-num"), tag = !0;
            if (($num.lentgh < 1 || $heart.length < 1) && (tag = !1), tag) var num = $num.text().slice(1, $self.text().length - 1);
            $heart.hasClass("s-active") ? (tag && $num.text("(" + (parseInt(num) - 1) + ")"), 
            $heart.removeClass("s-active")) : (tag && $num.text("(" + (parseInt(num) + 1) + ")"), 
            $heart.addClass("s-active"));
        }
        $("body").on("click", ".js-praise,.js-num,.js-show_love", praise);
    });
});