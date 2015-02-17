<?php

class Group extends Eloquent {

	
	protected $table = 'group';
	protected $fillable = array('uid', 'type_id');
	public $timestamps = false;
	protected $primaryKey = 'uid';

    //多对多获取已授权路由
	public function routelists(){
		return $this->belongsToMany('Routelist', 'permission', 'type_id', 'path_id');
	}


}