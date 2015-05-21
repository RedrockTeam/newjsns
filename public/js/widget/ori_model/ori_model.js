/**
 * Created by redrock on 2015/4/19.
 */
define([ "jquery", "underscore", "port" ], function($, _, port) {
    $(function() {
        //评论
        function comment() {
            data = {
                father_id: 0,
                to: $cL.attr("data-uid"),
                reply: [],
                username: userN
            }, crAjax(port.comment, data, function(res) {
                data.uid = $(".js-user_own_info").attr("data-user_id"), data.id = res.id;
                var temp = _.template($initTemp.html())({
                    data: [ data ]
                });
                //$loading.before(temp);
                $(".js-w_comments").append(temp), $loading.fadeOut(), alert("评论成功!!!!"), data = null, 
                $dI.val("").attr("placeholder", "评论："), type = 0;
            });
        }
        function reply() {
            crAjax(port.comment, data, function() {
                var html = '<span class="from u-name">' + data.fn + '</span>回复<span class="to u-name">' + data.tn + '</span> <span class="reply_cotent u-content">' + data.content + "</span><br/>";
                $cE.siblings(".js-reply_lists").append(html), alert("回复成功!!!!!"), data = null, $dI.val("").attr("placeholder", "评论："), 
                type = 0;
            });
        }
        //收藏
        function collect() {
            $.ajax({
                url: port.collect,
                data: {
                    type_id: typeId,
                    passage_id: passageId
                },
                method: "POST",
                success: function(res) {
                    var num;
                    (res = checkJson(res)) && res.success && (num = res.info ? parseInt($(".js-love_num").text()) + 1 : parseInt($(".js-love_num").text()) - 1, 
                    console.log(num), $(".js-love_num").text(num), $cL.attr("data-love_num", num));
                },
                error: function(err) {
                    alert("服务器数据出错!!!!"), alert(err.responseText);
                }
            });
        }
        //初始化
        function getComments(data) {
            $.ajax({
                url: port.get_comments,
                type: "POST",
                data: data,
                success: function(res) {
                    if (res = checkJson(res)) if (res.success) {
                        res.cz.forEach(function(piece, i) {
                            piece.reply = res.lzl[i];
                        });
                        var temp = _.template($initTemp.html())({
                            data: res.cz
                        });
                        //$loading.before(temp);
                        console.log(res.cz), $(".js-w_comments").html(temp), $loading.fadeOut();
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
            data = $.extend(data, {
                type_id: typeId,
                passage_id: passageId,
                content: $(".js-data_input").val()
            }), $.ajax({
                url: port,
                type: "POST",
                data: data,
                success: function(res) {
                    (res = checkJson(res)) && (res.success ? cb(res) : (alert("操作失败!!!!"), res.err && alert(res.err)));
                },
                error: function(err) {
                    alert("服务器数据出错!!!!!"), alert(err.responseText);
                }
            });
        }
        //显示图片
        function showImg() {
            var $self = $(this), url = $self.find(".js-bac_url").attr("data-url");
            $(".js-model_show").attr("src", url), console.log(url);
        }
        var $cE, $cL, $initTemp = $("#temp_comment"), $loading = $(".js-loading"), $dI = $(".js-data_input"), type = 0, userN = $(".js-user_name").text(), data = null, typeId = 0, passageId = 0;
        //打开弹框
        $(".js-open_model").on("click", function(ev) {
            var $self = $(this), $mL = $(".js-more_link");
            $self.data("pIndex", 0), $cL = $(this), typeId = $self.attr("data-type_id"), passageId = $self.attr("data-passage_id"), 
            ev.preventDefault(), $(".js-control_model").show(), $(".js-wrap").show(), $(".js-model").show(), 
            0 == $self.attr("data-url").length ? $mL.hide() : ($mL.attr("href", $self.attr("data-url")), 
            $mL.show()), $(".js-model_name").text($self.find(".js-list_name").text()), getComments({
                type_id: typeId,
                passage_id: passageId,
                page: 0
            }), showImg.call($self), $(".js-love_num").text($self.attr("data-love_num")), $(".js-introduce").text($self.attr("data-intro")), 
            $(".js-author").text($self.attr("data-author"));
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
        }), //评论上一页
        $(".js-prev").on("click", function() {
            var index = parseInt($cL.data("pIndex")) - 1;
            index >= 0 && getComments({
                type_id: typeId,
                passage_id: passageId,
                page: index
            }), $cL.data("pIndex", 0 > index ? 0 : index);
        }), //评论下一页
        $(".js-next").on("click", function() {
            var index = parseInt($cL.data("pIndex")) + 1;
            console.log(index), $cL.data("pIndex", index), getComments({
                type_id: typeId,
                passage_id: passageId,
                page: index
            });
        }), //回复
        $(".js-model").on("click", ".js-reply", function() {
            $cE = $(this);
            var $self = $(this), $f = $self.parents(".js-father");
            data = {
                to: $f.attr("data-fi"),
                tn: $f.attr("data-fn"),
                father_id: $f.attr("data-ffi"),
                fn: userN
            }, console.log(data), type = 1, $dI.select().attr("placeholder", "回复" + data.tn + ":"), 
            window.scroll(0, $dI.offset().top);
        });
    });
});