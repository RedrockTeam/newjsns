<?php

class Micmovie extends Eloquent {

	
	protected $table = 'micromovie';
	protected $fillable = array('title', 'author', 'uid', 'introduce', 'created_at', 'updated_at', 'status');

    //获取用户名
    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }
}