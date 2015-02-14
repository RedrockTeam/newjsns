/**
 * Created by redrock on 2015/2/12.
 */
define(['jquery', 'jquery.sliderBox'], function($){
    $('.js-slider').slideBox({
        direction : 'left',//left,top#方向
        duration : 1,//滚动持续时间，单位：秒
        easing : 'swing',//swing,linear//滚动特效
        delay : 5,//滚动延迟时间，单位：秒
        startIndex : 1,//初始焦点顺序,
        width: '650',
        height: '300',
        hideIndexBar: false,
        hideClickBar : false
    });
});