<?php

class UserController_Controller extends Base_Controller {

	public function get_register()
    {

    }

	public function post_register()
    {
    	$data =  Input::all();
    	$rules = [
    		'fname' => "required|min:3",
    		'lname' => "required|min:3",
    		'gender' => "in:0,1,2",
    		'email' => "required|email",
    		'password' => "required|min:3|max:20",
    	];
    	$messages = [

    	];
    	$validation = Validator::make($data, $rules, $messages);

    	if($validation->fails()) {
    		return Redirect::route("register")->with_errors($validation);
    	}
    	
    	$user = User::create($data);
    	Auth::login($user->id);
    	return Redirect::to_route("whatsup");
    }    

    public function get_login()
    {
        
    }
    public function post_login()
    {
        $input = Input::all();
        
        $creds = array(
            'username' => $input['username'],
            'password' => $input['password'],
        );

        if( Auth::attempt($creds) )
        {
            return Redirect::to_route("whatsup");
        }
        $msg = 'اطلاعات وارد شده صحیح نمی باشد.';
        
        return Redirect::to_route("login")->with('msg', $msg);
    }
}