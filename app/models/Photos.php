<?php
/**
 * Class Photos
 * @Author Lich
 * 相片model
 */
class Photos extends Eloquent {

	
	protected $table = 'photos';
	protected $fillable = array('title', 'url', 'introduce', 'album_id', 'created_at', 'update_at', 'original_url', 'comment_num', 'love_num', 'status');

    public function findFather(){
        return $this->belongsTo('Album', 'album_id', 'id');
    }

}