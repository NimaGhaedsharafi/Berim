<?php

class HomeController_Controller extends Base_Controller {

	public function get_index()
	{
		$data = ['title' => 'خوش آمدید'];
		return View::make('home.index', $data);
	}
}