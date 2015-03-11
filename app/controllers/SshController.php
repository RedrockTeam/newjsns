<?php
class SshController extends BaseController {

    private $pullcommand;
    //自主命令
    public function getCommand(){
        $input = Input::all();
        $command = explode($input, ';');
        SSH::run($command, function($line) {
            return $line.PHP_EOL;
        });
    }

    //pull当前项目
    public function gitPull(){
        $this->pullcommand = array(
            'cd /var/www',
            'git pull jsns master',
        );
        if(SSH::run($this->pullcommand)){
            $data = array(
                'status' => '200',
                'info' => 'ok',
            );
            return $data;
        }
        else{
            $data = array(
                'status' => '500',
                'info' => 'GG',
            );
            return $data;
        }

    }

    //


}