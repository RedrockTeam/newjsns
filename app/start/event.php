<?php
/**
 * @Author Lich
 * 事件监听模块
 * Date: 2015/3/26
 * Time: 0:13
 */
/*******事件注册*********/
//use Illuminate\Support\ServiceProvider;
//
//class FooServiceProvider extends ServiceProvider {
//
//    public function register()
//    {
//        $this->app->bind('Literature', function()
//        {
//            return new Foo;
//        });
//    }
//
//}

/*******事件监听绑定*********/
//Event::listen('Foo.query', function(){
//    $event = array(
//        'uid' => Session::get('uid'),
//        'action' => '操作文章'
//    );
//    DB::table('log')->insert($event);
//});

Literature::updated(function($sql){
    $op = ($sql->status==0)?'冻结':'恢复';
    $event = array(
        'uid' => Session::get('uid'),
        'action' => '对文学类标题为'.$sql->title.'的文章进行'.$op,
    );
     Logget::create($event);
});

