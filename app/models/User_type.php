<?php
/**
 * Class User_type
 * @Author Lich
 * 用户类型model
 */
class User_type extends Eloquent {

	
	protected $table = 'user_type';
	protected $fillable = array('name');
	public $timestamps = false;

    //多对多获取已授权路由
    public function routelists(){
        return $this->belongsToMany('Routelist', 'permission', 'type_1id', 'id');
    }
}