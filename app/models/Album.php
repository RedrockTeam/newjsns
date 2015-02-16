<?php

class Album extends Eloquent {

	
	protected $table = 'album';
	protected $fillable = array('uid', 'album_name', 'created_at', 'updated_at');


}