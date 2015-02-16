<?php

class Navigation extends Eloquent {

	
	protected $table = 'navigation';
	protected $fillable = array('table_name', 'type', 'father_id');
	public $timestamps = false;

    //获取二级导航, 自己获取自己
    public function hasManyson(){
        return $this->hasMany('Navigation', 'father_id', 'id');
    }
}