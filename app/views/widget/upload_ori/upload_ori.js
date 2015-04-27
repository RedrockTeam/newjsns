/**
 * Created by redrock on 2015/4/22.
 */
define(['jquery'], function($){
    $(function(){
        $('.js-ori_type').on('change', function(){
            if(this.value == $('.js-flag').val() ){
                $('.js-type_work').show();
                $('.js-type_link').hide();
            }else{
                $('.js-type_work').hide();
                $('.js-type_link').show();
            }
        });
    });
});
