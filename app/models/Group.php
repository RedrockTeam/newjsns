<?php

class Group extends Eloquent {

	
	protected $table = 'group';
	protected $fillable = array('uid', 'type_id');
	public $timestamps = false;
	protected $primaryKey = 'uid';

    //远层一对多获取已授权路由
	public function route(){
		return $this->hasManyThrough('Routelist', 'permission', 'type_id', 'id');
	}


}