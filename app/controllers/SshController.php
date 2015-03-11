<?php
class SshController extends BaseController {

    private $pullcommand;
    //自主命令
    public function getCommand(){
        $input = Input::all();
        $command = explode(';', $input['input']);   
        SSH::run($command);
    return Redirect::back();
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