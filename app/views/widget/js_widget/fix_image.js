/**
 * Created by redrock on 2015/3/16.
 */
/*修复图片大小问题 按照比例修复*/
define(['jquery'], function($){
    $(function(){
        var $img = $('.js-fix_image');

        $img.each(function($i, ele){
            if(ele.complete){
                fix.call($(ele));
            }else{
                ele.onload = fix;
            }
        });

        function fix(){
            var $self = $(this),
                w = $self.width(),
                h = $self.height(),
                scale = w / h;
            var $parent = $self.parent('.js-fix_image_parent'),
                lW = $parent.width(),
                lH = $parent.height();
            var cH = lW / scale,
                cW = lH * scale;
            if( cH >= lH ){
                alert(1);
                $self.css({
                    'width' : lW,
                    'height' : cH
                });
            }else if( cW >= lW){
                alert(2);
                $self.css({
                    'width' : cW,
                    'height' : lH
                });
            }else{
                alert(3);
            }
        }
    });
});