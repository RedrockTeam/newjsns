/**
 * Created by redrock on 2015/2/15.
 */
//爱拍列表
define([ "jquery", "underscore", "port" ], function($, _, port) {
    $(function() {
        //$(window).on('scroll', judge);
        /*--------------internal function----------*/
        function init() {
            //init
            $(window).scrollTop() > 0 && $("html,body").animate({
                scrollTop: 0
            }), getImg();
        }
        function getImg() {
            function dealRequest(res) {
                //成功后的处理
                res.success ? /*var html = _.template($temp.html())({data: res.data[0]});
                    $loadGif.before(html);*/
                render(res.data) : res.errMsg && alert(res.errMsg);
            }
            //获取图片
            $.ajax({
                url: port.get_img,
                method: "GET",
                success: dealRequest
            });
        }
        function render() {
            function parseData() {
            }
            var action, li, img = new Image();
            $loadGif.before($([ action = $('<div class="u-user_action f-cb"/>').append($([ $('<div class="u-show_comments"/>')[0], $('<div class="u-show_love"/>')[0] ]))[0], li = $('<li class="u-ph_item f-cb"/>')[0] ])), 
            $(action).append($([])), img.onload = parseData, $(img).attr({
                src: ""
            });
        }
        {
            var $loadGif = ($(".js-outer_photo"), $(".js-load_gif"));
            $("#js-photo_temp"), new Image();
        }
        init(), alert(123);
    });
});