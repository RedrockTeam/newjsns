<?php
/**
 * Class Log
 * @Author Lich
 * 日志model
 */
class Logget extends Eloquent {
	protected $table = 'log';
    protected $fillable = array('uid', 'action');


}