<?php

class Comment extends Eloquent {

	
	protected $table = 'comment';
	protected $fillable = array('type_id', 'content', 'from', 'to', 'read_status', 'created_at', 'updated_at', 'status');

	//获取评论
	public static function findComment($type_id, $work_id, $page){
		$skip = 2*($page-1);
		$data['cz'] = Comment::where('comment.type_id', '=', $type_id)
				->where('comment.work_id', '=', $work_id)
				->where('comment.status', '=', '1')
				->join('users', 'comment.from', '=', 'users.uid')
				->skip($skip)
				->limit(2)
				->select('username', 'content', 'uid', 'head as head_pic', 'comment.created_at as time', 'love_num as praise', 'comment.id')
				->get();
		foreach($data['cz'] as $v){
			$data['lzl'][] = Comment::where('father_id','=', $v['id'])
				->join('users as from_user', 'comment.from', '=', 'from_user.uid')
				->join('users as to_user', 'comment.to', '=', 'to_user.uid')
				->where('comment.status', '=', '1')
				->select('content', 'from_user.uid as from_uid', 'from_user.username as from_name', 'to_user.uid as to_uid', 'to_user.username as to_name')
				->get();
		}
		$data['success'] = 'true';
		$data['output'] = '成功';
		return $data;
	}


}
