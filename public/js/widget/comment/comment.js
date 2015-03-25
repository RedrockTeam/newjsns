/**
 * Created by redrock on 2015/3/25.
 */
define([ "jquery", "port" ], function($, port) {
    /*-------事件处理函数----*/
    function reply() {
        var $self = $(this);
        $father = $self.parents(".js-father"), $cover.css("display", "block"), data = {
            from: $self.siblings(".js-user_info").find(".js-user_from").attr("data-value"),
            from_name: $self.siblings(".js-user_info").find(".js-user_from").text(),
            to: $self.siblings(".js-user_info").find(".js-user_to").attr("data-value"),
            to_name: $self.siblings(".js-user_info").find(".js-user_to").text(),
            father_id: $self.parents(".js-father").attr("data-value"),
            type_id: $(".js-passage_info").attr("data-type_id"),
            passage_id: $(".js-passage_info").attr("data-passage_id")
        };
    }
    function comment() {
        /*$father = $self.parents('.js-father');*/
        /*data = {
            'to' : $father.attr('data-value'),
            'from' : $self.siblings('.js-user_info').find('.js-user_to').attr('data-value'),
            'to_name' : $self.siblings('.js-user_info').find('.js-user_to').text(),
            'father_id' : $self.parents('.js-father').attr('data-value'),
            'type_id' : $('.js-passage_info').attr('data-type_id'),
            'passage_id' : $('.js-passage_info').attr('data-passage_id')
        };*/
        //$cover.css('display', 'block');
        alert("先别慌， 还没有加上哈!!!");
    }
    function offCover() {
        $self = $(this), $self.css("display", "none");
    }
    function subForm(ev) {
        ev.preventDefault();
        var $self = $(this), content = $self.find(".js-content").val();
        return content.length > 300 || content.length < 1 ? (alert("您输入的字数不正确!!!"), !1) : (data.content = content, 
        "null" == typeof data && alert("请确认您的操作知否正确!!!"), void ajax());
    }
    function ajax() {
        console.log(port), $.ajax({
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
                res.success ? (alert("发表评论成功!!!"), successOff()) : alert(res.err ? res.err : "评论失败");
            },
            error: function() {
                alert("评论失败!!!");
            }
        });
    }
    function successOff() {
        $cloneItem = $(".js-comment_item").eq(0).clone(!0), $cover.css("display", "none"), 
        $cloneItem.find(".js-user_from").attr("data-value", data.from).text(data.from_name), 
        $cloneItem.find(".js-user_to").attr("data-value", data.to).text(data.to_name), $cloneItem.find(".js-user_content").text(data.content), 
        $father.find(".js-user_action").before($cloneItem);
    }
    //储存数据
    var data = null, $cloneItem = null, $cover = $(".js-cover_comment"), $form = $(".js-form_editor");
    /*回复*/
    $(".js-reply_btn").on("click", reply), /*评论*/
    $(".js-comment_passage").on("click", comment), /*关闭评论部分*/
    $cover.on("click", offCover), /*阻止冒泡*/
    $form.on("click", function(ev) {
        ev.stopPropagation();
    }), /*发布评论*/
    $form.on("submit", subForm);
});