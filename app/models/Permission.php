<?php
/**
 * Class Permission
 * @Author Lich
 * 授权路由model
 */
class Permission extends Eloquent {

	
	protected $table = 'permission';
	protected $fillable = array('type_id', 'path_id');
	public $timestamps = false;

    public function routelist(){
        return $this->hasMany('Routelist', 'id', 'path_id');
    }



}