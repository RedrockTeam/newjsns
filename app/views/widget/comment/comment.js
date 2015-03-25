/**
 * Created by redrock on 2015/3/25.
 */
define(['jquery'], function($){
    //储存数据
    var data = null;
    var $cover = $('.js-cover_comment');
    var $form = $('.js-form_editor');
    /*评论*/
    $('.js-reply_btn').on('click', onCover);
    /*关闭评论部分*/
    $cover.on('click', offCover);
    /*阻止冒泡*/
    $form.on('click', function(ev){ ev.stopPropagation();  });
    /*发布评论*/
    $form.on('submit', subForm);

    /*-------事件处理函数----*/
    function onCover(){
        var $self = $(this);
        $cover.css('display', 'block');
        data = {
            'from' : $self.siblings('.js-user_info').find('.js-user_from').attr('data-value'),
            'to' : $self.siblings('.js-user_info').find('.js-user_to').attr('data-value'),
            'father_id' : $self.parents('.js-father').attr('data-value')
            //'type_id' :
        };
    }

    function offCover(){
        $self = $(this);
        $self.css('display','none');
    }

    function subForm(ev){
        ev.preventDefault();
        var $self = $(this);
    }
});