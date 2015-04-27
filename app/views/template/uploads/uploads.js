/**
 * Created by redrock on 2015/2/1.
 */
//配置require.config
require.config({
    baseUrl : 'public/js/lib',
    shim : {
        'uploadify' : ['jquery'],
        'bootstrap' : ['jquery']
    },
    paths : {
        jquery : 'jquery',
        port : '../template/uploads/port',
        uploadify : '../../complexPlugin/uploadify/jquery.uploadify',
        upload_photo : '../widget/upload_photo/upload_photo',
        upload_movie : '../widget/upload_movie/upload_movie',
        webuploader : '../../complexPlugin/webuploader/dist/webuploader.flashonly',
        bootstrap: "http://cdn.gbtags.com/twitter-bootstrap/3.2.0/js/bootstrap",
        summernote: "summernote.min",
        upload_passage : "../widget/upload_passage/upload_passage"
    }
});

//加载依赖项
define(['jquery','upload_photo', 'upload_passage' ,'bootstrap','summernote'], function($){
    $(function(){
        var map = {
            'js-photo' : $('.js-form_photo'),
            'js-passage' : $('.js-form_passage'),
            'js-movie' : $('.js-form_movie'),
            'js-ori' : $('.js-form_ori')
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
                $('.' + key).removeClass('active');
                map[key].css('display', 'none');
            }
            $('.'+btn).addClass('active');
            map[btn].css('display', 'block');
        }
        $('#editor').summernote();
    });

});
