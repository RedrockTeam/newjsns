<?php

class Comment extends Eloquent {

	
	protected $table = 'comment';
	protected $fillable = array('type_id', 'content', 'from', 'to', 'read_status', 'created_at', 'updated_at', 'status');

	//获取评论
	public static function findComment($type_id, $work_id, $page){
		$skip = 2*($page-1);
		$data['cz'] = Comment::where('type_id', '=', $type_id)
				->where('work_id', '=', $work_id)
				->where('status', '=', '1')
				->skip($skip)
				->limit(2)
				->get();
		foreach($data['cz'] as $v){
			$data['lzl'][] = Comment::where('father_id','=', $v['id'])->where('status', '=', '1')->get();
		}
		$data['success'] = 'true';
		$data['output'] = '成功';
		return $data;
	}


}
