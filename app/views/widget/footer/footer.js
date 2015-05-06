/**
 * Created by redrock on 2015/4/29.
 */
define(['jquery'], function($){
    //console.log(document.body.clientHeight);
    var h = document.documentElement.clientHeight;
    h = h -$('.g-top_bar').height() - $('.g-header').height() - parseFloat( $('.g-container').css('margin-top') ) * 2 - $('.g-footer')[0].offsetHeight;
    $('.g-container').css('min-height' , h );
});