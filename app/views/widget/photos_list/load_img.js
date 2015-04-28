/**
 * Created by redrock on 2015/2/15.
 */
//爱拍列表
define(['jquery', 'underscore', 'port'], function ($, _, port) {
    $(function () {
        var $outer = $(".js-outer_photo"),
            $loadGif = $('.js-load_gif'),
            $temp = $('#js-photo_temp');
        var queen = [], cur = null, image = new Image();

        init();
        //$(window).on('scroll', judge);

        /*--------------internal function----------*/
        function init() {  //init
            if ($(window).scrollTop() > 0) $('html,body').animate({scrollTop: 0});
            getImg();
        }
        alert(123);
        function getImg() {  //获取图片
            $.ajax({
                url: port['get_img'],
                method: 'GET',
                success: dealRequest
            });
            function dealRequest(res) {     //成功后的处理
                if (res.success) {
                    /*var html = _.template($temp.html())({data: res.data[0]});
                    $loadGif.before(html);*/
                    render(res.data);
                } else {
                    if (res.errMsg) alert(res.errMsg);
                }
            }
        }

        function render(data) {
            var img = new Image();
            var action, li;
            $loadGif.before(
                $([
                    action = $('<div class="u-user_action f-cb"/>').append(
                        $([
                            $('<div class="u-show_comments"/>')[0],
                            $('<div class="u-show_love"/>')[0]
                        ])
                    )[0],
                    li = $('<li class="u-ph_item f-cb"/>')[0]
                ])
            );
            $(action).append(
                $([

                ])
            );
            img.onload = parseData;
            $(img).attr({
                "src": ""
            });
            function parseData(ev) {
                var self = this;
            }
        }
    });
});