/**
 * Created by redrock on 2015/4/19.
 */
define([ "jquery", "underscore", "port" ], function($, _, port) {
    $(function() {
        //评论
        function comment() {
            data = {
                from: "sg",
                to: "sgsgd",
                content: "sgbfdubi",
                reply: []
            }, crAjax(port.comment, data, function() {
                var temp = _.template($initTemp.html())({
                    data: [ data ]
                });
                $loading.before(temp), $loading.fadeOut(), alert("评论成功!!!!"), data = null, $dI.val("").attr("placeholder", "评论："), 
                type = 0;
            });
        }
        function reply() {
            crAjax(port.reply, data, function() {
                var html = '<span class="from u-name">' + data.from + '</span>回复<span class="to u-name">' + data.to + '</span> <span class="reply_cotent u-content">' + data.content + "</span><br/>";
                console.log(html), //console.log( $cE.parents('.js-reply_lists') );
                $cE.siblings(".js-reply_lists").append(html), alert("回复成功!!!!!"), data = null, $dI.val("").attr("placeholder", "评论："), 
                type = 0;
            });
        }
        //收藏
        function collect() {
            $.ajax({
                url: port.collect,
                data: {
                    name: "lijixi"
                },
                method: "POST",
                success: function(res) {
                    (res = checkJson(res)) && alert(res.success ? "收藏成功!!!!" : "取消收藏成功!!!");
                },
                error: function(err) {
                    alert("服务器数据出错!!!!"), alert(err);
                }
            });
        }
        //初始化
        function initComments() {
            $.ajax({
                url: port.get_comments,
                type: "POST",
                data: {
                    name: "lijinxin"
                },
                success: function(res) {
                    if (res = checkJson(res)) if (res.success) {
                        var temp = _.template($initTemp.html())({
                            data: res.data
                        });
                        $loading.before(temp), $loading.fadeOut();
                    } else alert("数据获取失败，请稍后再试!!!"), res.err && alert(res.err);
                },
                error: function(err) {
                    alert("服务器数据有问题!!!!情况未明"), alert(err.responseText);
                }
            });
        }
        //检测res是否为对象
        function checkJson(data) {
            if ("object" != typeof data) try {
                data = JSON.parse(data);
            } catch (err) {
                return alert("服务其数据出错!!!!"), alert(err), !1;
            }
            return data;
        }
        //评论和回复 ajax
        function crAjax(port, data, cb) {
            $.ajax({
                url: port,
                type: "POST",
                data: data,
                success: function(res) {
                    (res = checkJson(res)) && (res.success ? cb() : (alert("操作失败!!!!"), res.err && alert(res.err)));
                },
                error: function(err) {
                    alert("服务器数据出错!!!!!"), alert(err);
                }
            });
        }
        var $cE, $initTemp = $("#temp_comment"), $loading = $(".js-loading"), $dI = $(".js-data_input"), type = 0, data = null;
        //打开弹框
        $(".js-open_model").on("click", function() {
            $(".js-control_model").show(), $(".js-wrap").show();
        }), //关闭弹框
        $(".js-control_model, .js-wrap").on("click", function() {
            $(".js-control_model").hide(), $(".js-wrap").fadeOut();
        }), //阻止事件冒泡
        $(".js-model").on("click", function(ev) {
            ev.stopPropagation();
        }), //收藏
        $(".js-collect").on("click", collect), //评论
        $(".js-comment").on("click", function() {
            0 === type ? comment() : reply();
        }), //回复
        $(".js-model").on("click", ".js-reply", function() {
            $cE = $(this), data = {
                from: "asd",
                to: "sdavsdj",
                content: "sgsrhg"
            }, type = 1, $dI.select().attr("placeholder", "回复" + data.to + ":"), window.scroll(0, $dI.offset().top);
        }), //发表
        initComments();
    });
});