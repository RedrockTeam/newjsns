/**
 * Created by redrock on 2015/3/17.
 */
/*多图上传*/
define(['jquery', 'uploadify'], function($){
    $(function(){
        $('.js-upload_photo').uploadify({
            'swf'      : 'public/complexPlugin/uploadify/uploadify.swf',
            'uploader' : 'public/complexPlugin/uploadify/uploadify.php',
            'cancelImg'      : 'public/complexPlugin/uploadify/uploadify-cancel.png',
            'multi' : true
        });
    });
});