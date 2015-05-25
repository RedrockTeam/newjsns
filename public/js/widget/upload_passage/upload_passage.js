/**
 * Created by redrock on 2015/4/6.
 */
define([ "jquery" ], function($) {
    $(function() {
        $(".js-form_passage").on("submit", function(ev) {
            ev.preventDefault();
            var c, $self = $(this);
            return $self[0].title.value.length < 1 ? ($($self[0].title).css("border-color", "red"), 
            alert("请填写标题!!!"), !1) : ($($self[0].title).css("border-color", "#ccc"), $self[0].cover.value.length < 1 ? (alert("请上传封面!!!"), 
            !1) : (c = $(".note-editable").html().trim()).length < 1 ? (alert("请填写内容塞！！！"), 
            !1) : ($(".js-hidden_content").text(c), void $(this)[0].submit()));
        });
    });
});