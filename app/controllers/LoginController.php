<?php
/**
 * Class LoginController
 * @Author Lich
 * 登陆注册模块
 */

class LoginController extends BaseController
{
    private $username;
    private $password;
    private $rules;
    public function index() {
        return View::make("template.login-register.login-register");
    }
    //注册
    public function register(){
        $input = Input::all();
        $num = User::where('uid', '=', $input['stu_id'])->count();
        if($num!=0){
            $error = '你已注册';
            return Redirect::back()->withErrors($error, 'register');
        }
        $result = $this->get_register($input['stu_id'], $input['stu_pwd']);
        if ($result == $input['stu_id']) {
            $num = User::where('uid', '=', $input['stu_id'])->count();
            if($num!=0){
                return 'error';
            }
            $data = array(
                'username' => $input['stu_nickname'],
                'uid' => $input['stu_id'],
                'password' => Hash::make($input['stu_pwd']),
                'status' => 1
            );
            $uid = User::create($data);
            $role = array(
                'uid' => $uid['id'],
                'type_id'=>'3',
            );
            DB::table('group')->insert($role);
            $info = '注册成功';
            return Redirect::back()->withErrors($info, 'login');
        }
        else{
            $info = '统一认证码或密码有误, 点击<a href="http://qxgl.cqupt.edu.cn/e2qPortalPub/security/user/userpwdrest.html">找回密码</a>';
            return  Redirect::back()->withInput()->withErrors($info, 'register');
        }
    }

    //登陆
    public function login(){
        $input = Input::all();
         if($this->verify($input['username'], $input['password'])){
             $nickname = User::where('uid', '=', $input['username'])->first();
             Session::put('nickname', $nickname['username']);
             Session::put('uid', $nickname['id']);
             return Redirect::to('/')->withCookie(Cookie::forever('uid', $nickname['id']));
         }
        else{
            $info = '用户名或密码错误';
            return Redirect::back()->withInput()->withErrors($info, 'login');
        }
    }

    //登陆验证
    private function verify($username, $password){
        $this->username = $username;
        $this->password = $password;
        $this->rules = array(
            'username' => 'required',
            'password' =>' required|min:6|max:18',
        );

        $data = array(
            'username' =>  $this->username,
            'password' =>  $this->password,
        );

        $validator = Validator::make($data, $this->rules);

        if($validator->fails())
        {
            return Redirect::to('/')
                ->withErrors($validator);
        }
        else
        {

            if(Auth::attempt(array('uid'=>$data['username'], 'password'=>$data['password']), true)) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    //验证注册信息
    private function get_register($username, $password){
        $this->username = $username;
        $this->password = $password;
        $url = 'http://hongyan.cqupt.edu.cn/my_client/client.php';
        $post = array(
            'url' => 'http://hongyan.cqupt.edu.cn/my_client/client.php',
            'submit' => 'submit',
            'username' => $this->username,
            'password' => $this->password,
        );
        if (is_array($post)) {
            ksort($post);
            $content = http_build_query($post);
            $content_length = strlen($content);
            $options = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n" . "Content-length: $content_length\r\n",
                    'content' => $content
                )
            );
            return file_get_contents($url, false, stream_context_create($options));
        }
    }


    //注销
    public function logout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/');

    }

}
