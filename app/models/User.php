<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    protected $fillable = array('uid', 'password', 'username', 'head', 'introduce', 'email', 'remember_token', 'status');

    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    public function getType(){
        return $this->belongsToMany('User_type', 'group', 'uid', 'type_id');
    }

}
