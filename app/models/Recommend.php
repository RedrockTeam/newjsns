<?php

class Recommend extends Eloquent {

	
	protected $table = 'recommend';
	protected $fillable = array('type_id', 'cover_url', 'works_infomation', 'works_introduce', 'status');

}