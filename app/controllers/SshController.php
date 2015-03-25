<?php
/**
 * Class SshController
 * @Author Lich
 * Ssh管理模块
 * TODO:danger!!!!实验性功能, 能使用, 需要提升用户体验
 */
class SshController extends BaseController {

    private $pullcommand;
    //自主命令
    public function getCommand(){
//        final $info;
        $input = Input::all();
        $command = explode(';', $input['input']);   
        SSH::run($command, function($line) {
            $data['info'] = $line.PHP_EOL;
        });
        $data['status'] = 200;
        return $data;
    }

    //pull当前项目
    public function gitPull(){
      $this->pullcommand = array(
            'cd /var/www/jsns',
            'git pull newjsns dev',
        );
        SSH::run($this->pullcommand);
    return Redirect::back();
       
    
    }


}