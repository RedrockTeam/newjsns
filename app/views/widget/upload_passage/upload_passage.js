/**
 * Created by redrock on 2015/4/6.
 */
define(['jquery'], function($){
    $(function(){
        $('.js-form_passage').on('submit', function(ev){
            ev.preventDefault();
            var $self = $(this);
            var c;
            if($self[0].title.value.length < 1){
                $( $self[0].title ).css('border-color', 'red');
                alert('请填写标题!!!');
                return false;
            }else{
                $( $self[0].title ).css('border-color', '#ccc');
            }

            if($self[0].cover.value.length < 1){
                alert('请上传封面!!!');
                return false;
            }

            if( (c = $('.note-editable').html().trim()).length < 1  ){
                alert('请填写内容塞！！！');
                return false;
            }
            $('.js-hidden_content').text( c);
            $(this)[0].submit();
        });
    });
});