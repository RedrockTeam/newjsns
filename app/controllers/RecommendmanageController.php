<?php
class RecommendmanageController extends BaseController{
    public function index(){
        $data = Recommend::orderBy('id', 'desc')->paginate(20);
        return View::make('admin.recommend')->with('data', $data);
    }
}
