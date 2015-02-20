<?php


class RecommendController extends BaseController {

	//读书影逝首页
    public function recommendIndex(){
        $id = Navigation::find(3)->hasManyson;
        $data['navigation'] = $id;
        $data['recommendlist'] = Recommend::getRecommend($id);
        $data['tags'] = Recommend::getTags($id);
		return View::make('template.bookmovie.bookmovie')->with('data', $data);
	}

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
