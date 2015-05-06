/**
 * Created by redrock on 2015/4/29.
 */
define(['jquery'], function($){
    //console.log(document.body.clientHeight);
    var h = window.screen.height;
    $('.g-container').css('min-height' , h - $('.g-header').height() -$('g-footer').height() );
});