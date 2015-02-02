<?php

class Navigation extends Eloquent {

	
	protected $table = 'navigation';
	protected $fillable = array('table_name', 'type', 'father_id');

}