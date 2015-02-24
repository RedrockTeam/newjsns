<?php

class Comment extends Eloquent {

	
	protected $table = 'comment';
	protected $fillable = array('work_id', 'type_id', 'content', 'from', 'to', 'praise', 'father_id', 'love_num','read_status', 'created_at', 'updated_at', 'status');
    private   $rules;

	//获取评论 TODO:users表中id为该应用的uid, users表里的uid为学号
	public static function findComment($type_id, $work_id, $page){
		$skip = 2*($page-1);
		$data['cz'] = Comment::where('comment.type_id', '=', $type_id)
				->where('comment.work_id', '=', $work_id)
                ->where('comment.father_id', '=', 0)
				->where('comment.status', '=', '1')
				->join('users', 'comment.from', '=', 'users.id')
				->skip($skip)
				->limit(2)
				->select('username', 'content', 'users.id', 'head as head_pic', 'comment.created_at as time', 'love_num as praise', 'comment.id')
				->get();
		foreach($data['cz'] as $v){
			$data['lzl'][] = Comment::where('father_id','=', $v['id'])
				->join('users as from_user', 'comment.from', '=', 'from_user.id')
				->join('users as to_user', 'comment.to', '=', 'to_user.id')
				->where('comment.status', '=', '1')
				->select('content', 'from_user.id as from_uid', 'from_user.username as from_name', 'to_user.id as to_uid', 'to_user.username as to_name')
				->get();
		}
        //机智的分页???
        $data['page'] = Comment::where('comment.type_id', '=', $type_id)
            ->where('comment.work_id', '=', $work_id)
            ->where('comment.father_id', '=', 0)
            ->where('comment.status', '=', '1')
            ->paginate(2);
//        $data['page']->setBaseUrl('#');
		$data['success'] = 'true';
		$data['output'] = '成功';
		return $data;
	}

    //发表评论 TODO:删死数据
    public function addComment($type_id, $work_id, $content=null, $to=0, $father_id=0){
        $data = array(
            'type_id' => $type_id,
            'work_id' => $work_id,
            'content' => $content,
            'from'    => /*Session::get('uid')*/1,
            'to'      => $to,
            'father_id'=>$father_id,
            'read_status'=>0,
            'praise'  => 0,
            'love_num'=> 0,
            'status'  => 1,
        );
        $this->rules = array(
            'type_id' => 'required|numeric',
            'work_id' => 'required|numeric',
            'content' => 'required',
            'from'    => 'required',
            'to'      => 'required|numeric',
            'father_id'=>'required|numeric',
            'read_status'=>'required|numeric',
            'praise'  => 'required|numeric',
            'love_num'=> 'required|numeric',
            'status'  => 'required|numeric',
        );
        $validator = Validator::make(
            $data,
            $this->rules
        );
        if($validator->fails()){
            $error = array('gg');
            return $validator->messages();
        }
        else{
            if(Comment::create($data)){
                $success = array('ok');
                return $success;
            }
            else{
                return 'gg1';
            }
        }
    }

}
