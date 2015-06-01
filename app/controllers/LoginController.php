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
    private $url = 'http://hongyan.cqupt.edu.cn/RedCenter/Api/Handle/login';
    public function index() {
        return View::make("template.login-register.login-register");
    }

    //注册
    private function register($input){
        $num = User::where('uid', '=', $input['username'])->count();
        if($num!=0){
            $error = '你已注册';
            return Redirect::back()->withErrors($error, 'register');
        }
//        $result = $this->get_register($input['username'], $input['password']);
//        $result = file_get_contents("http://hongyan.cqupt.edu.cn/online/interface.php?username=$input[username]&password=$input[password]");
        $result = $this->curl($input);
        if ($result->status == 200) {
            $num = User::where('uid', '=', $input['username'])->count();
            if($num!=0){
                return 'error';
            }
            $data = array(
                'username' => $input['username'],
                'uid' => $input['username'],
                'password' => Hash::make($input['username']),
                'status' => 1
            );
            $uid = User::create($data);
            $role = array(
                'uid' => $uid['id'],
                'type_id'=>'3',
            );
            DB::table('group')->insert($role);
            return true;
        }
        else{
            $info = '身份认证有误, 点击<a href="http://qxgl.cqupt.edu.cn/e2qPortalPub/security/user/userpwdrest.html">找回密码</a>';
            return  Redirect::back()->withInput()->withErrors($info, 'register');
        }
    }

    //登陆
    public function login(){
         $input = Input::all();
         $num = User::where('uid', '=', $input['username'])->count();
         if($num > 0) {
              $result = $this->curl($input);
//                $result = file_get_contents("http://hongyan.cqupt.edu.cn/online/interface.php?username=$input[username]&password=$input[password]");
             if ($result->status == 200) {
                 if ($this->verify($input['username'], $input['username'])) {
                     $nickname = User::where('uid', '=', $input['username'])->first();
                     Session::put('nickname', $nickname['username']);
                     Session::put('uid', $nickname['id']);
                     return Redirect::to('/');
                 }
                 else{
                     $info = '用户名或密码错误';
                     return Redirect::back()->withInput()->withErrors($info, 'login');
                 }
             }
             else{
                 $info = '用户名或密码错误';
                 return Redirect::back()->withInput()->withErrors($info, 'login');
             }
         }
         elseif($num <= 0){
            if($this->register($input)){

                if($this->verify($input['username'], $input['password'])){

                    $nickname = User::where('uid', '=', $input['username'])->first();
                    Session::put('nickname', $nickname['username']);
                    Session::put('uid', $nickname['id']);
                    return Redirect::to('/');
                }
                else{
                    $info = '用户名或密码错误';
                    return Redirect::back()->withInput()->withErrors($info, 'login');
                }
            }

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
            'password' =>' required',
        );

        $data = array(
            'username' =>  $this->username,
            'password' =>  $this->password,
        );

        $validator = Validator::make($data, $this->rules);
        if($validator->fails())
        {
           return $validator;
        }
        else {

            if(Auth::attempt(array('uid'=>$data['username'], 'password'=>$data['username']), true)) {
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

    //curl
    private function curl($data0 = []){
        $data = [
            'user'=>$data0['username'],
            'password'=>$data0['password']
        ];
        // 初始化一个curl对象
        $ch = curl_init();
        curl_setopt ( $ch, CURLOPT_URL, $this->url );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
        // 运行curl，获取网页。
        $contents = json_decode(curl_exec($ch));
        // 关闭请求
        curl_close($ch);
        return $contents;
    }

}
