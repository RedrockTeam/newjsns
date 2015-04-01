/**
 * Created by redrock on 2015/3/25.
 */
/*评论*/
define(['jquery', 'underscore', 'port'], function($, _, port){
    var $form = $('.js-form_editor'),
          $replyBtn = $('.js-reply_btn'),
          $commentBtn = $('.js-comment_btn');
    var $wrap = null,
          $cloneItem = null;
    var data = {};  //保存数据
    var cPos = 0, //保存当前位置
           cType = 0;  //当前评论的类别
    /*绑定*/
    $replyBtn.on('click', reply);
    $commentBtn.on('click', comment);
    $form.on('submit', submitForm);

    /*事件处理*/
    function reply(){
        var $self = $(this);
        cPos = $('body').scrollTop();
        posPage();
        cType = 2;
        $wrap = $self.parents('.js-reply_father');
        $cloneItem = $('.js-reply_item').eq(0).clone(true);
        //数据注入
        data = {
            'to' : $self.siblings('.js-user_info').find('.js-user_from').attr('data-value'),
            'to_name' : $self.siblings('.js-user_info').find('.js-user_from').text(),
            'father_id' : $self.parents('.js-reply_father').attr('data-value')
        };
    }
    function comment(){
        var $self = $(this);
        cPos = $('body').scrollTop();
        $wrap = $self.parents('.js-reply_father');
        $cloneItem = $('.js-reply_item').eq(0).clone(true);
        cType = 1;
        posPage();
        //数据注入
        data = {
            'to' : $self.parents('.js-reply_father').attr('data-value'),
            'to_name' : $self.parents('.js-user_action').find('.js-fater_user').text(),
            'father_id' : $self.parents('.js-reply_father').attr('data-value')
        };
    }

    //提交
    function submitForm(ev){
        ev.preventDefault();
        var $self = $(this);
        data = $.extend({
            'from' : $('.js-user_own_info').attr('data-user_id'),
            'from_name' : $('.js-user_own_info').find('.js-user_name').text(),
            'to_name' : $('.js-content_title').text(),
            'to' : $('.js-content_info').attr('data-value'),
            'type_id' : $('.js-passage_info').attr('data-type_id'),
            'passage_id' : $('.js-passage_info').attr('data-passage_id'),
            'father_id' : 0
        },data);
        if( check.call($self) ){
            ajax();
        }
    }
    //检测
    function check(){
        var $self = this;
        var content = $self.find('.js-content').val();
        if(content.length > 300 || content.length < 1){
            alert('您输入的字数不正确!!!');
            return false;
        }else{
            data.content = content;
        }
        return true;
    }

    //提交数据
    function ajax(){
        console.log(data);
        $.ajax({
            url : port['comment'],
            method : 'POST',
            dataType : 'json',
            data : data,
            success : function(res){
                if(typeof res != 'object'){
                    try{
                        res = JSON.parse(res);
                    }catch(err){
                        alert('数据错误!!!!');
                    }
                }
                if(res.success){
                    success(res);
                }else{
                    failed(res);
                }
            },
            error : function(err){
                alert('http状态错误' + err.status);
            }
        });
    }
    //成功
    function success(res){
        render();
        $('body').scrollTop(cPos);
        alert('发表评论成功!!!');
    }
    //成功后的渲染
    function render(){
        if(cType === 0){    //单个对文章的评论
            //todo
        }else{   //回复的那种类型
            var temp = _.template( $('#temp_reply').html() )({
                data : data
            });
            $wrap.find('.js-user_action').before(temp);
        }
    }
    //失败
    function failed(res){
        if(res.err) alert(res.err);
        else alert('评论失败');
    }
    //定位input框
    function posPage(){
        $('html, body').css({
            'scrollTop' : $form.offset().top
        }).find('input[type="text"]').focus();
    }
});