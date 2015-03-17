<?php

class Literature extends Eloquent {

	
	protected $table = 'literature';
	protected $fillable = array('type_id', 'title', 'content', 'uid', 'created_at', 'updated_at', 'status');

    //获取用户名
    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }

    //获取文章类型
    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    //获取文学首页文章
    public static function getPassage($value = array(), $type = null){
        if($type == null){
            $type = '%';
        }
        foreach($value as $id){
            $type_id[] = $id['id'];
        }
        $passage = Literature::whereIn('type_id', $type_id)->where('type_id', 'like', $type)->where('status', '=', '1')->orderBy('created_at', 'desc')->paginate(5);
        foreach($passage as $v){
            $v->navigation;
            $v->user;
        }
        return $passage;
    }
}