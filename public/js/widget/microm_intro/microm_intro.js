/**
 * Created by redrock on 2015/3/16.
 */
//赞和踩
define([ "jquery", "port" ], function($, port) {
    $(function() {
        /*--------事件处理函数-------*/
        function praise(ev) {
            //赞
            ev.preventDefault();
            var $self = $(this);
            return "已赞" == $self.text() ? void alert("你已经赞过了!!!") : void ajax({
                url: port.praise,
                data: {},
                callback: function() {
                    alert("点赞+1"), $self.text("已赞");
                }
            });
        }
        function thread(ev) {
            //踩
            ev.preventDefault();
            var $self = $(this);
            return "已踩" == $self.text() ? void alert("你已经踩过了!!!") : void ajax({
                url: port.thread,
                data: {},
                callback: function() {
                    alert("踩+1"), $self.text("已赞");
                }
            });
        }
        function ajax(config) {
            $.ajax({
                url: config.url,
                method: "POST",
                dataType: "json",
                data: config.data,
                success: function(res) {
                    if ("object" != typeof res) try {
                        res = JSON.parse(res);
                    } catch (err) {
                        alert("error数据错误!!!");
                    }
                    res.success ? config.callback(res) : alert(res.err ? res.err : "操作失败!!!!");
                },
                error: function(err) {
                    alert("操作失败!!!"), alert(err.responseText);
                }
            });
        }
        /*--------事件绑定-------*/
        $(".js-praise").on("click", praise), //赞
        $(".js-thread").on("click", thread), //踩
        console.log(port);
    });
});