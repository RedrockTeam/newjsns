<?php

class Group extends Eloquent {

	
	protected $table = 'group';
	protected $fillable = array('uid', 'type_id');
	public $timestamps = false;
	protected $primaryKey = 'uid';


	public function route(){
		return $this->hasManyThrough('Routelist', 'permission', 'type_id', 'id');
	}


}