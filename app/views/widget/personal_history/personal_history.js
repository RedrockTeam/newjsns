/**
 * Created by redrock on 2015/5/20.
 */
define(['jquery'], function($){
    $(function(){
        var $get = $('.js-get_reply'), $post = $('.js-post_reply');
        $('.js-reply_tabs a').on('click', function(){
            $('.js-reply_tabs a').removeClass('s-active');
            var $self = $(this).addClass('s-active');
            if( $self.index() === 0 ){
               $get.show();
                $post.hide();
            }else{
                $get.hide();
                $post.show();
            }
        });
    });
});