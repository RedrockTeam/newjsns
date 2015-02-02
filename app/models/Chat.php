<?php

class Chat extends Eloquent {

	
	protected $table = 'chat';
	protected $fillable = array('title', 'uid', 'created_at', 'updated_at', 'status');


}