<?php
/**
 * Class Routelist
 * @Author Lich
 * 路由列表model
 */
class Routelist extends Eloquent {

	
	protected $table = 'routelist';
	protected $fillable = array('name', 'path');
	public $timestamps = false;

}