<?php

class Literature extends Eloquent {

	
	protected $table = 'literature';
	protected $fillable = array('type_id', 'title', 'content', 'uid', 'created_at', 'updated_at', 'status');

}