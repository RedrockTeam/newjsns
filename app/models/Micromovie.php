<?php

class Micromovie extends Eloquent {

	
	protected $table = 'micromovie';
	protected $fillable = array('title', 'author', 'uid', 'introduce', 'created_at', 'updated_at', 'status');

    //获取用户名
    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }

    //获取微视类型
    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    //获取微视首页
    public static function getMicromovie($value = array()){
        foreach($value as $id){
            $type_id[] = $id['id'];
            if($id['work_id']!=null)
                $work_id[] = $id['work_id'];
            else
                $work_id[] = '%';
        }
        foreach($type_id as $key => $v) {
            $micromovie = Micromovie::whereIn('type_id', $type_id)->where('status', '=', '1')->where('id', 'like', $work_id[$key])->orderBy('created_at', 'desc')->paginate(5);
        }
        foreach($micromovie as $v){
            $v->navigation;
            $v->user;
        }
        return $micromovie;
    }

    //获取微视的热门标签
    public static function getTags($value = array()){
        foreach($value as $id){
            $tags[] = Tags::where('type_id', $id['id'])->orderBy('id','rand')->limit(7)->get();
        }
        return $tags;
    }
}