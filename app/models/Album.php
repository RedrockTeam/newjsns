<?php
/**
 * Class Album
 * @Author Lich
 * 相册model
 */
class Album extends Eloquent {

	
	protected $table = 'album';
	protected $fillable = array('uid', 'album_name', 'created_at', 'updated_at', 'type_id', 'album_cover', 'comment_num', 'love_num', 'status');

    //获取用户名
    public function user(){
        return $this->hasOne('User', 'id', 'uid');
    }

    //获取封面
    public function cover(){
        return $this->hasOne('Photos', 'album_cover', 'id');
    }

    //获取相册类型
    public function navigation(){
        return $this->hasOne('Navigation', 'id', 'type_id');
    }

    //获取相册
    public static function getAlbum($value = array()){
        foreach($value as $id){
            $type_id[] = $id['id'];
        }
        $album = Album::whereIn('type_id', $type_id)->where('status', '=', '1')->orderBy('created_at', 'desc')->paginate(16);
        foreach($album as $v){
            $v->cover;
        }
        return $album;
    }

    //获取相册内图片
    public function imgDetail(){
        return $this->hasMany('Photos', 'album_id', 'id')
                    ->where('photos.status', '=', '1')
                    ->select('album_id', 'photos.original_url as img_src', 'photos.id as img_id', 'photos.introduce as img_desc');
    }
}