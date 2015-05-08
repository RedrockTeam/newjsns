/**
 * Created by redrock on 2015/4/6.
 */
define([ "jquery" ], function($) {
    $(function() {
        $(".js-form_passage").on("submit", function(ev) {
            ev.preventDefault();
            var c, $self = $(this);
            return console.log(), $self[0].title.value.length < 1 ? ($($self[0].title).css("border-color", "red"), 
            alert("请填写标题!!!"), !1) : ($($self[0].title).css("border-color", "#ccc"), (c = $(".note-editable").html().replace(/\s/gi, "")).length < 1 ? (alert("请填写内容塞！！！"), 
            !1) : ($(".js-hidden_content").text(c), void $(this)[0].submit()));
        });
    });
});