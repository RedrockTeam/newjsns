/**
 * Created by redrock on 2015/3/16.
 */
define(['jquery','ueditorConfig', 'ueditorAll'], function($){
    $(function(){
        var ue = UE.getEditor('container');
        var $form = $('.js-form_ueditor');

        $form.on('click', function(ev){
            ev.preventDefault();
            console.log(ue.getContent());
        });
    })
});