/**
 * Created by redrock on 2015/2/1.
 */
//爱拍列表
define(['jquery', 'underscore'], function($, _){
    $(function(){
        var $outer = $(".js-outer_photo"),
            $load_img = $('.js-load');

        $.ajax({
            'url' : '/get_photos',
            'method' : 'GET',
            'success' : function(res){
                if(res.success){
                    loadImg(res.output);
                }
            }
        });

        function loadImg(output){
            
        }

    });
});