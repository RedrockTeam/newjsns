<?php
/**
 * Class SshController
 * @Author Lich
 * 事件监听模块 TODO:有时间用类加载的方式重构
 */
class EventlistenController extends BaseController {
    public function literatureEvent(){
        $event = array(
            'uid' => Session::get('uid'),
            'action' => '操作文章'
        );
        Log::create($event);
    }
}