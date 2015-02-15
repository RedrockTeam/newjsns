<?php

class Literature extends Eloquent {

	
	protected $table = 'literature';
	protected $fillable = array('type_id', 'title', 'content', 'uid', 'created_at', 'updated_at', 'status');

    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }

    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }
}