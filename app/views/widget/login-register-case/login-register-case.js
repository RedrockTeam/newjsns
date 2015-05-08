/**
 * Created by redrock on 2015/3/13.
 */
define(['jquery', 'port'], function($, port){
    $(function(){
        /*阻止事件冒泡*/
        $('.m-login-register-case').on('click', function(ev){ ev.stopPropagation() });
        /*tab切换*/
        openBox( $('.js-open-register'), $( '.u-register') );
        openBox( $('.js-open-login'), $('.u-login') );
        /*表单提交*/
        $('.js-login-form, .js-register-form').on('submit', checkForm);

        /*-------event 处理函数-----*/
        function openBox($openEle, $openBox){   //tab切换
            $openEle.on('click', function(){
                var $self = $(this);
                if( !$self.hasClass('s-active') ){
                    $('.u-tabs li').removeClass('s-active');
                    $('.u-register,.u-login').css('display','none');
                    $self.addClass('s-active');
                    $openBox.css('display', 'block');
                }
            });
        }

        function checkForm(ev){
            var $self = $(this),
                map = {
                    'stu_id' : /^[\d]{7}$/gi,
                    'stu_pwd' : /^[\s\S]{6,20}$/g,
                    'stu_nickname' : /^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[\w])+$/gi
                };
            if( !check.call($self,map) ){
                ev.preventDefault();
            }
        }

        function check(map){
            var $self = $(this),
                returnValue = true,
                $input = $('.js-check', $self);
            $input.each(function($i, ele){
                var $ele = $(ele), key = $ele.attr('data-check_type');
                if( map[key] && (Object.prototype.toString.call(map[key]) == '[object RegExp]') ){
                    if(!map[key].test( $ele.val() )){
                        $ele.next('.s-error').css('display', 'block');
                        returnValue = false;
                    }else{
                        $ele.next('.s-error').css('display', 'none');
                    }
                }
            });
            console.log(returnValue);
            return returnValue;
        }
    });

});

