/**
 * Created by redrock on 2015/4/22.
 */
define([ "jquery" ], function($) {
    $(function() {
        $(".js-ori_type").on("change", function() {
            17 == this.value ? ($(".js-type_work label").text("请上传作品"), $(".js-type_link").hide()) : ($(".js-type_work label").text("请上传封面"), 
            $(".js-type_link").show());
        }), $(".js-form_ori").on("submit", function(ev) {
            ev.preventDefault();
            var $self = $(this);
            return $self[0].title.value.length < 1 ? ($($self[0].title).css("border-color", "red"), 
            alert("请填写标题"), !1) : ($($self[0].title).css("border-color", "#ccc"), $self[0].cover.value.length < 1 ? (alert("请上传封面!!!!"), 
            !1) : $self[0].cover.length < 1 ? (alert("上传封面!!!!!"), !1) : $self[0].url.value.length < 1 ? ($($self[0].url).css("border-color", "red"), 
            alert("请填写链接!!!"), !1) : ($($self[0].url).css("border-color", "#ccc"), console.log($self[0].introduce.length), 
            $self[0].introduce.value.length < 1 ? ($($self[0].introduce).css("border-color", "red"), 
            alert("请填写简介!!!!!"), !1) : ($($self[0].introduce).css("border-color", "#ccc"), void $self[0].submit())));
        });
    });
});