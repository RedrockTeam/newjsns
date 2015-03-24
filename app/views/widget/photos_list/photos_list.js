/**
 * Created by redrock on 2015/2/1.
 */
define(['jquery', 'slim_box', 'waterfall', 'underscore', 'port'], function($, slim_box, masonry, _, port){
    $(function(){
        // 按需加载方式
        var wf_page = 0;
        $(".js-waterfall").waterfall({
            colWidth: 222,
            // 自定义跨域请求
            ajaxFunc: function(success, error){
                $.ajax({
                    type: 'GET',
                    url: port['get_img'],
                    cache: false,
                    data: {'page': ++wf_page},
                    timeout: 60000,
                    success: success,
                    error: error
                });
            },
            createHtml: function(data){
                data.img_desc = data.img_desc || data.img_name ||'没有描述';
                return _.template($('#js-photo_temp').html()  )({data : data});
            }
        });
        //幻灯片
        $(".js-waterfall").slimbox({
            counterText: "共 {y} 张图片 第{x}张图片"
        });
    });
});