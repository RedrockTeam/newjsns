/**
 * Created by redrock on 2015/3/15.
 */
define([ "jqueryPack", "imageSelect" ], function() {
    $(function() {
        /*配置*/
        function setPluginCrop($ele) {
            $ele.imgAreaSelect({
                aspectRatio: "1:1",
                resizable: !0,
                //maxHeight : '94',
                //maxWidth : '94',
                //minWidth : '94',
                //minHeight : '94',
                onSelectChange: preview
            });
        }
        /*选择框事件处理*/
        function preview(img, selection) {
            $(".js-crop_form #x1").val(selection.x1), $(".js-crop_form #y1").val(selection.y1), 
            $(".js-crop_form #w").val(selection.width), $(".js-crop_form #h").val(selection.height);
            var px = "-" + Math.round(selection.x1) + "px", py = "-" + Math.round(selection.y1) + "px";
            console.log(px), $(".u-show_thumb_img img").css({
                "margin-left": px,
                "margin-top": py
            });
        }
        function saveForm(ev) {
            var x1 = $(".js-crop_form #x1").val(), y1 = $(".js-crop_form #y1").val(), w = $(".js-crop_form #w").val(), h = $(".js-crop_form #h").val();
            "" == x1 || "" == y1 || "" == w || "" == h ? alert("你还没有截取大小，请截取大小!!") : $(".js-crop_form").submit();
        }
        var $cropImg = $(".js-crop-img");
        /*配置插件  默认宽度和高度都为94px*/
        $cropImg.length > 0 && ($cropImg[0].complete ? setPluginCrop($cropImg) : $cropImg.on("load", function() {
            setPluginCrop($cropImg);
        })), /*保存截图*/
        $(".js-save-form").click(saveForm);
    });
});