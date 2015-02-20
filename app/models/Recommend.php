<?php

class Recommend extends Eloquent {

	
	protected $table = 'recommend';
	protected $fillable = array('type_id', 'cover_url', 'works_infomation', 'works_introduce', 'status');

    //获取推荐类型
    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    //获取读书影逝的推荐
    public static function getRecommend($value = array()){
        foreach($value as $id){
            $type_id[] = $id['id'];
        }
        $recommend = Recommend::whereIn('type_id', $type_id)->where('status', '=', '1')->orderBy('id', 'desc')->paginate(20);
        foreach($recommend as $v){
            $v->navigation;
        }
        return $recommend;
    }

    //获取读书影逝的热门标签
    public static function getTags($value = array()){
        foreach($value as $id){
            $tags[] = Tags::where('type_id', $id['id'])->orderBy('id','rand')->limit(7)->get();
        }
        return $tags;
    }

}