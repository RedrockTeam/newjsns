/**
 * Created by redrock on 2015/4/6.
 */
define(['jquery'], function($){
    $(function(){
        $('.js-form_passage').on('submit', function(ev){
            ev.preventDefault();
            $('.js-hidden_content').text( $('.note-editable').html());
            $(this)[0].submit();
        });
    });
});