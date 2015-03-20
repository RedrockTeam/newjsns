<?php

class IndexController extends BaseController {

	public function index(){
        Session::reflash();
        return View::make('template.home.home');
	}

}
