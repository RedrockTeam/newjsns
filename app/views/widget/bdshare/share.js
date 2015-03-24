/**
 * Created by redrock on 2015/3/17.
 */
define(['jquery'], function($){
    var text  = $('.js-share_title').text() + '\n'+ $('.js-share_content').text();
    window._bd_share_config = {
        common: {
            bdText: text,
            bdDesc: text,
            bdUrl: location.href
        },
        share: [{
            "bdSize": 16
        }]
    };
});