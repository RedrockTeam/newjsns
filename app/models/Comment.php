<?php

class Comment extends Eloquent {

	
	protected $table = 'comment';
	protected $fillable = array('type_id', 'content', 'from', 'to', 'read_status', 'created_at', 'updated_at', 'status');


}
