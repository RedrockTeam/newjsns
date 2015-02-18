/**
 * Created by redrock on 2015/2/15.
 */
//爱拍列表
define(['jquery', 'underscore'], function($, _){
    $(function(){
        var $outer = $(".js-outer_photo"),
            $imgWrappers = $(".js-outer_photo .g-ph_item"),
            $loadGif = $('.js-load_gif'),
            $temp = $('#js-photo_temp');

        $imgWrappers.find('img').on('load', function(){
            resetImgHeight( $(this) );
        });
        $imgWrappers.find('img').each(function(i, ele){
            resetImgHeight( $(ele) );
        });

        //检测是否没在顶部
        if( $(window).scrollTop() > 0){
            $("html,body").animate({
                scrollTop : 0
            });
        }

        //页面滚动事件处理
        $(document).on('scroll', judge);

        function judge(){
            var $window = $(window),
                $document = $(document);
            var winHeight = window.innerHeight ? window.innerHeight : $window.height(), // iphone fix
                closeToBottom = ($window.scrollTop() + winHeight > $document.height() - 100);
            var maxH = filterMaxHeight( $imgWrappers ).height(),
                maxLimited = ( maxH - ( $window.scrollTop() + winHeight) > 200);

            if(closeToBottom || maxLimited){
                getImgs( getMin() );
                $loadGif.css('display', 'block');
            }
        }

        //筛选最高的一个
        //return $dom
        function filterMaxHeight($dom){
            var $return = $dom.eq(0);

            $dom.each(function(i,ele){
                if( $return.height() < $(ele).height()){
                    $return  = $(ele);
                }
            });
            return $return;
        }

        //计算高度最低的ul
        function getMin(){
            var $minUl = $imgWrappers.eq(0);

            $imgWrappers.each(function(i, ele){
                if( $minUl.height() > $(ele).height()){
                    $minUl = $(ele);
                }
            });
            return $minUl;
        }

        //获取图片
        function getImgs($wrapper){
            //ajax请求
            $.ajax({
                'url' : '/get_photos',
                'method' : 'GET',
                'success' : function(res){
                    if(res.success && !res.isDrain){
                        dealData(res.data, $wrapper);
                    }
                }
            });
        }

        //处理到来的数据
        function dealData(data, $wrapper){
            var render = _.template( $temp.html() )( {data : data} );

            $wrapper.append(render);
            $wrapper.find('img').on('load',function(){
                resetImgHeight( $(this) );
            });
        }

        //处理图片大小
        function resetImgHeight($img){
            $img.css({
                'width' : '206px',
                'height' : 206 * ( $img.height()/ $img.width() ) + 'px'
            });
        }
    });
});