<?php

class Collection extends Eloquent {

	
	protected $table = 'collection';
	protected $fillable = array('type_id', 'work_id');

}