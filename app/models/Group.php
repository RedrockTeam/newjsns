<?php

class Group extends Eloquent {

	
	protected $table = 'group';
	protected $fillable = array('uid', 'type_id');

	public function get_type()
	{
		return $this->hasMany('permission', 'type_id', 'type_id');
	}


}