<?php
/**
 * 渲染后台模板
 */

class HomeController extends BaseController {

	public function index(){
		return View::make('admin.pages.index');
	}

}
