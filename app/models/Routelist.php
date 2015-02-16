<?php

class Routelist extends Eloquent {

	
	protected $table = 'routelist';
	protected $fillable = array('name', 'path');
	public $timestamps = false;

}