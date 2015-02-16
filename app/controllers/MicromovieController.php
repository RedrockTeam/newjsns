<?php
/**
 * 渲染后台模板
 */

class MicromovieController extends BaseController {

    //微视首页
	public function micromovieIndex(){
        $data = Micmovie::paginate(5);
        $id = Navigation::find(4)->hasManyson;
        $tags = Tags::hotTags($id);
        return $tags;
        //    return View::make('template.micromovie.micromovie')->with('data', $data);
	}

}
