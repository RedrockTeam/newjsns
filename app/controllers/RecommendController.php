<?php
/**
 * Class RecommendController
 * @Author Lich
 * 读书影逝模块
 */

class RecommendController extends BaseController {

	//读书影逝首页
    public function recommendIndex(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        if($type_id!=null)
            $id = array(Navigation::find($type_id));
        else
            $id = Navigation::find(3)->hasManyson;
        $data['navigation'] = $id;
        $data['category'] = Navigation::find(3)->hasManyson;
        $data['recommendlist'] = Recommend::getRecommend($id);
        $data['tags'] = Recommend::getTags($data['category']);
		return View::make('template.bookmovie.bookmovie')->with('data', $data);
	}

    //读书影逝搜索标签
    public function recommendTagSearch(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        $tag = Input::get('tag')? Input::get('tag'):'';
        if($tag == null || $type_id == null)
            $this->recommendIndex();
        else
            $tag = '%'.$tag.'%';
        $works = Tags::where('type_id', '=', $type_id)
            ->where('tag', 'like', $tag)
            ->select('type_id as id', 'work_id')
            ->get();
        $id = array(Navigation::find($type_id));
        $data['navigation'] = $id;
        $data['recommendlist'] = Recommend::getRecommend($works);
        $data['category'] = Navigation::find(3)->hasManyson;
        $data['tags'] = Recommend::getTags($data['category']);
        return View::make('template.bookmovie.bookmovie')->with('data', $data);

    }

    //读书影逝详情
    public function recommendDetail(){
        $id = Input::all();
        $passage_id = $id['passage_id'];
        $type_id = $id['type_id'];
        $page = isset($id['page'])? ($id['page']>0? $id['page']:1):1;
        $passage = Recommend::find($passage_id);
        $passage->user;
        $comment = Comment::findComment($type_id, $passage_id, $page);
        $recommend = Recommend::orderBy('love_num', 'desc')->limit(3)->get();
        $data = array(
            'passage' => $passage,
            'comment' => $comment,
            'recommend'=>$recommend,
        );
        return View::make('template.bkmv_sub.bkmv_sub')->with('data', $data);
    }

}
