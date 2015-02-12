<?php

class Group extends Eloquent {

	
	protected $table = 'group';
	protected $fillable = array('uid', 'type_id');
	public $timestamps = false;

	public function get_type()
	{
		return $this->hasOne('permission', 'type_id', 'type_id');
	}


}