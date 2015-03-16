/**
 * Created by redrock on 2015/3/16.
 */
//点赞
define(['jquery', 'port'], function($, port){
    $(function(){
        $('.js-praise').on('click', praise);

        /*事件处理*/
        function praise(ev){
            var $self = $(this);
            ajax.call($self, {'name' : 'lijinxin'});
        }
        /*ajax*/
        function ajax(data){
            var $self = $(this);
            $.ajax({
                url : port['praise'],
                method : 'POST',
                dataType : 'json',
                data : data,
                success : function(res){
                    if(typeof res != 'object'){
                        try{
                            res = JSON.parse(res);
                        }catch(err){
                            alert('error数据错误!!!');
                        }
                    }
                    if(res.success){
                        controlParise.call($self);
                    }else{
                        if(res.err) alert(res.err);
                        else alert('点赞失败!!!!');
                    }
                },
                error : function(err){
                    alert('点赞失败!!!');
                    alert(err.responseText);
                }
            });
        }

        /*点赞或取消点赞*/
        function controlParise(){
            var $self = $(this);
            var $hreat = $self.find('.js-show_love'),
                $num = $self.find('.js-num');

            var num = $num.text().slice(1, $self.text().length - 1);
            if( !$hreat.hasClass('s-active') ){
                $num.text(
                    '(' + (parseInt(num) + 1) + ')'
                );
                $hreat.addClass('s-active');
            }else{
                $num.text(
                    '(' + (parseInt(num) - 1) + ')'
                );
                $hreat.removeClass('s-active');
            }

        }
    });
});