<?php
/**
 * Class collection
 * @Author Lich
 * 收藏model
 */
class Collection extends Eloquent {

	
	protected $table = 'collection';
	protected $fillable = array('type_id', 'work_id', 'uid');
    public $timestamps = false;

    //获取二级导航
    public function hasallFather(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }
    //根据work_id和type_id取作品
    public static function getCollectWorks($work_id = null){
        foreach($work_id as $key=>$id){
            $table = $id->hasallFather;
            $result[] = DB::table($table['table_name'])->where('id', '=', $id['work_id'])->where('status', '=', '1')->first();
            $result[$key]['table'] = $table['table_name'];
        }
        return $result;
    }

}