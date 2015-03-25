<?php
/**
 * Class LiteraturemanageController
 * @Author Lich
 * 文学管理模块
 */
class LiteraturemanageController extends BaseController{
    //文学管理首页
    public function index(){
        $data = Literature::orderBy('created_at', 'desc')->paginate(20);
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return View::make('admin.literature')->with('data', $data);
    }
    //文学管理搜索
    public function search(){
            $input = Input::all();
        switch($input['search_type']){
            case 1:
                    $data['data'] = $this->search_id($input['search_content']);
                    break;
            case 2:
                    $data['data'] = $this->search_title($input['search_content']);
                    break;
            case 3:
                    $data['data'] = $this->search_author($input['search_content']);
                    break;
            default:
                    return $data['status'] = 403;
        }
            $data['status'] = 200;
            return $data;
    }
    //文学管理冻结/恢复
    public function manage(){
        $input = Input::all();
        Literature::find($input['id'])->update(array('status'=>$input['operator_id']));
        return $data['status'] = 200;
    }
    //根据文章id搜索
    private function search_id($content){
        $data = Literature::where('id', '=', $content)->orderBy('created_at', 'desc')->get();
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return $data;
    }
    //按文章标题搜索
    private function search_title($content){
        $data = Literature::where('title', 'like', '%'.$content.'%')->orderBy('created_at', 'desc')->get();
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return $data;
    }
    //按用户搜索
    private function search_author($content){
        $id = User::where('username', '=', $content)->select('id')->first();
        $data = Literature::where('uid', '=', $id['id'])->orderBy('created_at', 'desc')->get();
        foreach($data as $v){
            $v->user;
            $v->navigation;
        }
        return $data;
    }
}
