<?php

class Group extends Eloquent {

	
	protected $table = 'group';

	public function get_type()
	{
		return $this->hasMany('permission', 'type_id', 'type_id');
	}


}