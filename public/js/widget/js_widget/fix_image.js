/**
 * Created by redrock on 2015/3/16.
 */
/*修复图片大小问题 按照比例修复*/
define([ "jquery" ], function($) {
    $(function() {
        function fix() {
            var $self = $(this), w = $self.width(), h = $self.height(), scale = w / h, $parent = $self.parent(".js-fix_image_parent"), lW = $parent.width(), lH = $parent.height(), cH = lW / scale, cW = lH * scale;
            cH >= lH ? (alert(1), $self.css({
                width: lW,
                height: cH
            })) : cW >= lW ? (alert(2), $self.css({
                width: cW,
                height: lH
            })) : alert(3);
        }
        var $img = $(".js-fix_image");
        $img.each(function($i, ele) {
            ele.complete ? fix.call($(ele)) : ele.onload = fix;
        });
    });
});