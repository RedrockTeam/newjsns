/**
 * Created by redrock on 2015/3/13.
 */
define(['jquery', 'port'], function($, port){
    $(function(){
        openBox( $('.js-open-register'), $( '.u-register') );
        openBox( $('.js-open-login'), $('.u-login') );

        function openBox($openEle, $openBox){
            $openEle.on('click', function(){
                var $self = $(this);
                if( !$self.hasClass('s-active') ){
                    $('.u-tabs li').removeClass('s-active');
                    $('.u-register,.u-login').css('display','none');
                    $self.addClass('s-active');
                    $openBox.css('display', 'block');
                }
            });
        }
    });

});

