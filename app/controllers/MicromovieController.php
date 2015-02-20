<?php
/**
 * 渲染后台模板
 */

class MicromovieController extends BaseController {

    //微视首页
	public function micromovieIndex(){
        $id = Navigation::find(4)->hasManyson;
        $data['navigation'] = $id;
        $data['micromovielist'] = Micromovie::getMicromovie($id);
        $data['tags'] = Micromovie::getTags($id);
        //return $data;
        return View::make('template.micromovie.micromovie')->with('data',$data);
	}

}
