<?php

class OriginalController extends BaseController {

    //原味首页
	public function originalIndex(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        if($type_id!=null)
            $id = array(Navigation::find($type_id));
        else
            $id = Navigation::find(5)->hasManyson;
        $data['navigation'] = $id;
        $data['main'] = Original::getMain($id);
        $data['category'] = Navigation::find(5)->hasManyson;
        $data['tags'] = Original::getTags($data['category']);
        return View::make('template.original.original')->with('data', $data);
	}

    //原味标签搜索
    public function orginalTagSearch(){
        $type_id = Input::get('type_id')? Input::get('type_id'):'';
        $tag = Input::get('tag')? Input::get('tag'):'';
        if($tag == null || $type_id == null)
            $this->originalIndex();
        else
            $tag = '%'.$tag.'%';
        $works = Tags::where('type_id', '=', $type_id)
            ->where('tag', 'like', $tag)
            ->select('type_id as id', 'work_id')
            ->get();
        $id = array(Navigation::find($type_id));
        $data['navigation'] = $id;
        $data['main'] = Original::getMain($works);
        $data['category'] = Navigation::find(5)->hasManyson;
        $data['tags'] = Original::getTags($data['category']);
        return View::make('template.original.original')->with('data', $data);

    }

}
