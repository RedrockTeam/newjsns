<?php

class OriginalController extends BaseController {

	public function originalIndex(){
        $id = Navigation::find(5)->hasManyson;
        $data['navigation'] = $id;
        $data['main'] = Original::getMain($id);
        $data['tags'] = Original::getTags($id);
        return View::make('template.original.original')->with('data', $data);
	}

}
