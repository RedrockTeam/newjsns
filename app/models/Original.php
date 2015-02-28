<?php
class Original extends Eloquent {


    protected $table = 'original';
    protected $fillable = array('type_id', 'cover_url', 'url', 'title', 'introduce', 'author', 'uid', 'love_num', 'comment_num');

    //获取用户名
    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }

    //获取原味类型
    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    //获取原味的首页主要数据
    public static function getMain($value = array()){
        foreach($value as $id){
            $type_id[] = $id['id'];
        }
        foreach($type_id as $v){
            $data[] = Original::where('type_id', '=', $v)->where('status', '=', '1')->limit(5)->get();
        }
        return $data;
    }

    //获取原味的热门标签
    public static function getTags($value = array()){
        foreach($value as $id){
            $tags[] = Tags::where('type_id', $id['id'])->orderBy('id','rand')->limit(7)->get();
        }
        return $tags;
    }
}