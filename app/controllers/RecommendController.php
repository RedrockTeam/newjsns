<?php
/**
 * 渲染后台模板
 */

class RecommendController extends BaseController {

	public function RecommendIndex(){
        $id = Navigation::find(3)->hasManyson;
        $data['navigation'] = $id;
        $data['recommendlist'] = Recommend::getRecommend($id);
        $data['tags'] = Recommend::getTags($id);
        return  $data['tags'];
		//return View::make('template.bookmovie.bookmovie');
	}

}
