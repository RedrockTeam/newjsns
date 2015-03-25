#锦瑟南山接口文档

范例:

	$.ajax({
             type: method,
             url: URL,
             data: DATA,
             dataType: "json",		//一般为json
             error: //,
             success: function(returnData){
                       			//
					}
                         });
            

##登陆

##文学

- 文章排序 

		method = 'get';
		URL = 'home/literature';
		DATA =  { type_id:'1'};  //type_order文章类别(0为全部), 其余类型请求页面时会渲染进去
		returnData = {
						"content":[
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","passage_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","passage_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","passage_id":"1"}
								  ],
						"success":"true",
						"output":"xxxxxx"
					}

- 下一页文章
 
		同文章排序, 改变page即可;

- 评论: 

		method = 'post';
		URL = 'home/comment/literature';
		DATA =  { comment:'xxxxxxxx', to:'uid' };  //uid为被回复人id
		returnData = { "success":"true", "output":"xxxxxx"  };	

- 评论分页

		method = 'get';
		URL = 'home/literatrue/comment';
		DATA =  { passage_id:'1', page:'1' };  
		returnData = {"cz":[{"username":"xxx", "uid":"1", "content":"xxxxx", "head_pic":"http://xxxx", "time":"xxxx", "praise":"32"}],
							"lzl":[
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" }
									], 
						"success":"true", "output":"xxxxxx"
					};
		
		
##爱拍

- 图片排序 

		method = 'get';
		URL = 'home/photos';
		DATA =  { type_order:'1', hot_order:'1' , 'page':'2' };  //type_order图片类别(0为全部), 图片热度(0为不按热度排, 1相反), 其余类型请求页面时会渲染进去
		returnData = {
						"content":[
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","author_id":"1","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","album_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","author_id":"1","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","album_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","author":"balabala","author_id":"1","introduce":"balabala","comment_num":"1","love_num":"1","type_id":"1","album_id":"1"}
								  ],
						"success":"true",
						"output":"xxxxxx"
					}

- 瀑布流加载更多图片

		 同图片排序, 改变page即可;

- 评论: 

		method = 'post';
		URL = 'home/comment/photos';
		 DATA =  { comment:'xxxxxxxx', to:'uid' };  //uid为被回复人id
		returnData = { "success":"true", "output":"xxxxxx"  };

##读书.影逝

- 排序及下一页

		method = 'get';
		URL = 'home/recommend';
		DATA =  { type_order:'1', hot_order:'1' , 'page':'2' };  //type_order图片类别(0为全部), 图片热度(0为不按热度排, 1相反), 其余类型请求页面时会渲染进去
		returnData = {
						"content":[
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"}
								  ],
						"success":"true",
						"output":"xxxxxx"
					}


- 评论: 
		
		method = 'post';
		URL = 'home/comment/recommend';
		DATA =  { comment:'xxxxxxxx', to:'uid' };  //uid为被回复人id
		returnData = { "success":"true", "output":"xxxxxx"  };	

- 评论分页

		method = 'get';
		URL = 'home/literatrue/comment';
		DATA =  { passage_id:'1', page:'1' };  
		returnData = {"cz":[{"username":"xxx", "uid":"1", "content":"xxxxx", "head_pic":"http://xxxx", "time":"xxxx"}], 
							"lzl":[
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" }
									], 
						"praise":"32","success":"true", "output":"xxxxxx" 
					};


##微视

- 排序及下一页

		method = 'get';
		URL = 'home/micromovie';
		DATA =  { type_order:'1', hot_order:'1' , 'page':'2' };  //type_order图片类别(0为全部), 图片热度(0为不按热度排, 1相反), 其余类型请求页面时会渲染进去
		returnData = {
						"content":[
									{"title":"balabala","author":"xxxxx","author_id":"1","cover":"http:\/\/xxxx", "introduce":"xxxxxx","time":"xxxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","author":"xxxxx","author_id":"1","cover":"http:\/\/xxxx","introduce":"xxxxxx","time":"xxxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","author":"xxxxx","author_id":"1","cover":"http:\/\/xxxx","introduce":"xxxxxx","time":"xxxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"}
								  ],
						"success":"true",
						"output":"xxxxxx"
					}


- 评论: 
 
		method = 'post';
		URL = 'home/comment/micromovie';
		DATA =  { comment:'xxxxxxxx', to:'uid' };  //uid为被回复人id
		returnData = { "success":"true", "output":"xxxxxx"  };	

- 评论分页

		method = 'get';
		URL = 'home/literatrue/comment';
		DATA =  { passage_id:'1', page:'1' };  
		returnData = {"cz":[{"username":"xxx", "uid":"1", "content":"xxxxx", "head_pic":"http://xxxx", "time":"xxxx"}], 
							"lzl":[
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" }
									], 
						"praise":"32","success":"true", "output":"xxxxxx" 
					};

##原味

- 排序及下一页:

		method = 'get';
		URL = 'home/recommend';
		DATA =  { type_order:'1', hot_order:'1' , 'page':'2' };  //type_order图片类别(0为全部), 图片热度(0为不按热度排, 1相反), 其余类型请求页面时会渲染进去
		returnData = {
						"content":[
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"},
									{"title":"balabala","cover":"http:\/\/xxxx","comment_num":"1","love_num":"1","type_id":"1","recommend_id":"1"}
								  ],
						"success":"true",
						"output":"xxxxxx"
					}


- 评论: 

		method = 'post';
		URL = 'home/comment/original';
		DATA =  { comment:'xxxxxxxx', to:'uid' };  //uid为被回复人id
		returnData = { "success":"true", "output":"xxxxxx"  };

- 评论分页

		method = 'get';
		URL = 'home/literatrue/comment';
		DATA =  { passage_id:'1', page:'1' };  
		returnData = {"cz":[{"username":"xxx", "uid":"1", "content":"xxxxx", "head_pic":"http://xxxx", "time":"xxxx"}], 
							"lzl":[
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" },
									{"from_uid":"1", "from_name":"xxx", "to_uid":"2", "to_name":"xxx", "content":"xxx" }
									], 
						"praise":"32","success":"true", "output":"xxxxxx" 
					};


##个人中心


##评论ajax

传给后端的数据
楼中楼:  {"type_id":123, "passage_id":321, "to":to_uid, "content":content, "father_id":floor_id}
新楼层:  {"type_id":123, "passage_id":321, "to":0, "content":content, "father_id":0}