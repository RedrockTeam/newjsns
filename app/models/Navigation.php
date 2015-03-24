<?php

class Navigation extends Eloquent {

	
	protected $table = 'navigation';
	protected $fillable = array('table_name', 'type', 'father_id');
	public $timestamps = false;

    //获取二级导航, 找儿子
    public function hasManyson(){
        return $this->hasMany('Navigation', 'father_id', 'id');
    }

    //获取一级导航, 找爹
    public function hasAFather(){
        return $this->hasMany('Navigation', 'id', 'father_id');
    }
}