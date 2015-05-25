/**
 * Created by redrock on 2015/3/18.
 */
define(['jquery'], function($){
    $('.js-form_movie').on('submit', function(ev){
        ev.preventDefault();
        var $self = $(this);
        if( $self[0].title.value.length < 1){
           $(  $self[0].title ).css('border-color', 'red');
            alert('请填写标题！！！');
            return false;
        }else{
            $( $self[0].title ).css('border-color', '#ccc');
        }

        if( $self[0].introduce.value.length < 1 ){
            $( $self[0].introduce ).css('border-color', 'red');
            alert('请填写简介!!!');
            return false;
        }else{
            $( $self[0].introduce ).css('border-color', '#ccc');
        }

        if( $self[0].cover_url.value.length < 1){
            alert('请上传封面！！！');
            return false;
        }

        if($self[0].url.value.length < 1){
            $( $self[0].url ).css('border-color', 'red');
            alert('怎么能把最关键的url给漏掉了!!!');
            return false;
        }else{
            $( $self[0].url ).css('border-color', '#ccc');
        }

        $self[0].submit();
    });
});