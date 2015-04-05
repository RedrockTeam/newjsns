/**
 * Created by redrock on 2015/3/16.
 */
//点赞 爱拍，文学， 微视， 读书影逝
define(['jquery', 'port'], function($, port){
    $(function(){
        $('body').on('click','.js-praise,.js-num,.js-show_love' ,praise);//代理

        /*--------事件处理函数------*/
        function praise(ev){
            var $self = $(this), $ele = $self;
            ev.stopPropagation(); //hack 子层节点
            !$self.hasClass('js-praise') && ( $ele = $self.parent('.js-praise'));
            data = {
                'type_id' : $ele.attr('data-type_id'),
                'passage_id' : $ele.attr('data-passage_id')
            };
            ajax.call($ele, data);
        }
        /*ajax*/
        function ajax(data){
            var $self = $(this);
            $.ajax({
                url : 'home/comment/collect',
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
                        if(res.error) alert(res.error);
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
            var $heart = $self.find('.js-show_love'),
                $num = $self.find('.js-num');
            var tag = true;
            if( $num.lentgh < 1 || $heart.length < 1 ){
                tag  = false;
            }
            if( tag )var num = $num.text().slice(1, $self.text().length - 1);
            if( !$heart.hasClass('s-active') ){
                if(tag){
                    $num.text(
                        '(' + (parseInt(num) + 1) + ')'
                    );
                }
                $heart.addClass('s-active');
            }else{
                if(tag){
                    $num.text(
                        '(' + (parseInt(num) - 1) + ')'
                    );
                }
                $heart.removeClass('s-active');
            }

        }
    });
});