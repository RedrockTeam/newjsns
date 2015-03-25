<?php
/**
 * Class Tags
 * @Author Lich
 * 标签model
 */
class Tags extends Eloquent {

	
	protected $table = 'tags';
	protected $fillable = array('type_id', 'work_id', 'tag');
	public $timestamps = false;

    //获取当前分类热门标签
    public static function hotTags($id = array()){
        foreach ($id as $v) {
            $tags[] = Tags::where('type_id', '=', $v['id'])->get();
        }
        return $tags;
    }

}
