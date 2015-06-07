<?php

class EventController_Controller extends Base_Controller {

	public $restful = true;    

	public function get_whatsup()
    {

    }    

	public function get_addEvent()
    {
        $data = ['title' => 'برنامه بذاریم'];
        return View::make('event.add', $data);
    }    

	public function post_addEvent()
    {

    }

}