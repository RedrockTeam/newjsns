/**
 * @date Created by redrock on 2015/1/31.
 * @desc 文学列表
 */

define(['jquery', 'port'], function($, port){
    $(function(){
        $('.js-content_filter').text(  $('.js-content_filter').text().replace(/<[^>]*>/gi, '') );
    });
});
