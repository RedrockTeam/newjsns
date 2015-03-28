/**
 * Created by redrock on 2015/3/25.
 */
/*评论*/
define([ "jquery", "underscore", "port" ], function($, _, port) {
    /*事件处理*/
    function reply() {
        var $self = $(this);
        cPos = $("body").scrollTop(), posPage(), cType = 2, $wrap = $self.parents(".js-reply_father"), 
        $cloneItem = $(".js-reply_item").eq(0).clone(!0), //数据注入
        data = {
            from: $self.siblings(".js-user_info").find(".js-user_from").attr("data-value"),
            from_name: $self.siblings(".js-user_info").find(".js-user_from").text(),
            to: $self.siblings(".js-user_info").find(".js-user_to").attr("data-value"),
            to_name: $self.siblings(".js-user_info").find(".js-user_to").text(),
            father_id: $self.parents(".js-reply_father").attr("data-value")
        };
    }
    function comment() {
        var $self = $(this);
        cPos = $("body").scrollTop(), $wrap = $self.parents(".js-reply_father"), $cloneItem = $(".js-reply_item").eq(0).clone(!0), 
        cType = 1, posPage(), console.log(), //数据注入
        data = {
            to: $self.parents(".js-reply_father").attr("data-value"),
            to_name: $self.parents(".js-user_action").find(".js-fater_user").text(),
            father_id: $self.parents(".js-reply_father").attr("data-value")
        }, console.log(data);
    }
    //提交
    function submitForm(ev) {
        ev.preventDefault();
        var $self = $(this);
        data = $.extend({
            from: 13,
            from_name: "haha",
            to_name: "nnn",
            to: 456,
            type_id: $(".js-passage_info").attr("data-type_id"),
            passage_id: $(".js-passage_info").attr("data-passage_id")
        }, data), check.call($self) && ajax();
    }
    //检测
    function check() {
        var $self = this, content = $self.find(".js-content").val();
        return content.length > 300 || content.length < 1 ? (alert("您输入的字数不正确!!!"), !1) : (data.content = content, 
        !0);
    }
    //提交数据
    function ajax() {
        $.ajax({
            url: port.comment,
            method: "POST",
            dataType: "json",
            data: data,
            success: function(res) {
                if ("object" != typeof res) try {
                    res = JSON.parse(res);
                } catch (err) {
                    alert("数据错误!!!!");
                }
                res.success ? success(res) : failed(res);
            },
            error: function(err) {
                alert("http状态错误" + err.status);
            }
        });
    }
    //成功
    function success() {
        render(), $("body").scrollTop(cPos), alert("发表评论成功!!!");
    }
    //成功后的渲染
    function render() {
        if (0 === cType) ; else {
            //回复的那种类型
            var temp = _.template($("#temp_reply").html())({
                data: data
            });
            $wrap.find(".js-user_action").before(temp);
        }
    }
    //失败
    function failed(res) {
        alert(res.err ? res.err : "评论失败");
    }
    //定位input框
    function posPage() {
        $("html, body").css({
            scrollTop: $form.offset().top
        }).find('input[type="text"]').focus();
    }
    var $form = $(".js-form_editor"), $replyBtn = $(".js-reply_btn"), $commentBtn = $(".js-comment_btn"), $wrap = null, $cloneItem = null, data = {}, cPos = 0, //保存当前位置
    cType = 0;
    //当前评论的类别
    /*绑定*/
    $replyBtn.on("click", reply), $commentBtn.on("click", comment), $form.on("submit", submitForm);
});