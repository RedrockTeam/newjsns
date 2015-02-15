<?php

class Micmovie extends Eloquent {

	
	protected $table = 'micromovie';
	protected $fillable = array('title', 'author', 'uid', 'introduce', 'created_at', 'updated_at', 'status');

    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }
}