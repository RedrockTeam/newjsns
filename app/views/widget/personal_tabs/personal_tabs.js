/**
 * Created by redrock on 2015/2/1.
 */

//个人中心tab切换
define(['jquery'], function($){
    var map = {
        'js-work' : $('.js-his_work'),
        'js-collect' : $('.js-his_collect'),
        'js-comments' : $('.js-his_comments')
    };
    for(var key in map){
        (function (key){
            $('.' + key).on('click', function(ev){
                switchTab.call(this, ev, key);
            });
        })(key);
    }
    function switchTab(ev, btn){
        ev.preventDefault();
        var $self = $(this);
        for(var key in map){
            $('.' + key).removeClass('s-active');
            map[key].css('display', 'none');
        }
        $('.'+btn).addClass('s-active');
        map[btn].css('display', 'block');
    }
});