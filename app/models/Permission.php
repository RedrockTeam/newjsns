<?php

class Permission extends Eloquent {

	
	protected $table = 'permission';
	protected $fillable = array('type_id', 'path');
	public $timestamps = false;



}