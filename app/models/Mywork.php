<?php

class Mywork extends Eloquent {


    protected $table = 'mywork';
    protected $fillable = array('type_id', 'work_id', 'uid');
    public $timestamps = false;

    //获取二级导航
    public function hasallFather(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }
    //根据work_id和type_id取作品
    public static function getPersonalWorks($work_id){
        foreach($work_id as $key => $id){
            $table = $id->hasallFather;
            $result[$key] = DB::table($table['table_name'])->where('id', '=', $id['work_id'])->where('status', '=', '1')->first();
            $result[$key]['table'] = $table['table_name'];
        }
        return $result;

    }

}