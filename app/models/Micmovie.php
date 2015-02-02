<?php

class Micmovie extends Eloquent {

	
	protected $table = 'micmovie';
	protected $fillable = array('title', 'author', 'uid', 'introduce', 'created_at', 'updated_at', 'status');

}