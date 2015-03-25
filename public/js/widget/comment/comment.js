/**
 * Created by redrock on 2015/3/25.
 */
define([ "jquery", "port" ], function($, port) {
    /*-------事件处理函数----*/
    function onCover() {
        var $self = $(this);
        $cover.css("display", "block"), data = {
            from: $self.siblings(".js-user_info").find(".js-user_from").attr("data-value"),
            to: $self.siblings(".js-user_info").find(".js-user_to").attr("data-value"),
            father_id: $self.parents(".js-father").attr("data-value"),
            type_id: $(".js-passage_info").attr("data-type_id"),
            passage_id: $(".js-passage_info").attr("data-passage_id")
        };
    }
    function offCover() {
        $self = $(this), $self.css("display", "none");
    }
    function subForm(ev) {
        ev.preventDefault();
        var $self = $(this), content = $self.find(".js-content").val();
        return content.length > 300 || content.length < 1 ? (alert("您输入的字数不正确!!!"), !1) : (data.content = content, 
        "null" == typeof data && alert("请确认您的操作知否正确!!!"), console.log(data), void ajax());
    }
    function ajax() {
        console.log(port), $.ajax({
            url: port.comment,
            method: "POST",
            dataType: "json",
            data: data,
            success: function(res) {
                if ("[object Object]" != typeof res) try {
                    res = JSON.parse(res);
                } catch (err) {
                    alert("数据错误!!!!");
                }
                alert(res.success ? "发表评论成功!!!" : res.error ? res.error : "评论失败");
            },
            error: function() {
                alert("评论失败!!!");
            }
        });
    }
    //储存数据
    var data = null, $cover = $(".js-cover_comment"), $form = $(".js-form_editor");
    /*评论*/
    $(".js-reply_btn").on("click", onCover), /*关闭评论部分*/
    $cover.on("click", offCover), /*阻止冒泡*/
    $form.on("click", function(ev) {
        ev.stopPropagation();
    }), /*发布评论*/
    $form.on("submit", subForm);
});