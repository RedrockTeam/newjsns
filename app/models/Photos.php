<?php

class Photos extends Eloquent {

	
	protected $table = 'photos';
	protected $fillable = array('type_id', 'title', 'url', 'introduce', 'album_id', 'created_at', 'update_at', );

}