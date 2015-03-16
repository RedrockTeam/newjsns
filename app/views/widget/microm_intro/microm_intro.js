/**
 * Created by redrock on 2015/3/16.
 */
//赞和踩
define(['jquery', 'port'], function($, port){
    $(function(){
        /*--------事件绑定-------*/
        $('.js-praise').on('click', praise);   //赞
        $('.js-thread').on('click', thread);   //踩
        console.log(port);
        /*--------事件处理函数-------*/
        function praise(ev){  //赞
            ev.preventDefault();
            var $self = $(this);
            if( $self.text() == '已赞' ){
                alert('你已经赞过了!!!');
                return ;
            }
            ajax({
                url: port['praise'],
                data : {},
                callback : function(res){
                    alert('点赞+1');
                    $self.text('已赞');
                }
            });
        }

        function thread(ev){  //踩
            ev.preventDefault();
            var $self = $(this);
            if( $self.text() == '已踩' ){
                alert('你已经踩过了!!!');
                return ;
            }
            ajax({
                url: port['thread'],
                data : {},
                callback : function(res){
                    alert('踩+1');
                    $self.text('已赞');
                }
            });
        }

        function ajax(config){
            $.ajax({
                url : config.url,
                method : 'POST',
                dataType : 'json',
                data : config.data,
                success : function(res){
                    if(typeof res != 'object'){
                        try{
                            res = JSON.parse(res);
                        }catch(err){
                            alert('error数据错误!!!');
                        }
                    }
                    if(res.success){
                        config.callback(res);
                    }else{
                        if(res.err) alert(res.err);
                        else alert('操作失败!!!!');
                    }
                },
                error : function(err){
                    alert('操作失败!!!');
                    alert(err.responseText);
                }
            });
        }
    });
});