<?php

class Tags extends Eloquent {

	
	protected $table = 'tags';
	protected $fillable = array('type_id', 'work_id', 'tag');
	public $timestamps = false;

}
