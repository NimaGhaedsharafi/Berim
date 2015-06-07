<?php

Route::get('/', ['as' => 'home', 'uses' => 'homeController@index' ]);
Route::post('register', [ 'before' => 'crsf' , 'as' => 'register', 'uses' => 'userController@register' ]);
Route::post('login', [ 'before' => 'crsf' , 'as' => 'login', 'uses' => 'userController@login' ]);

Route::get('whatsup', [ 'before' => 'auth' , 'as' => 'whatsup', 'uses' => 'eventController@whatsup' ]);
Route::get('event/add', [ 'before' => 'auth' , 'as' => 'addEvent', 'uses' => 'eventController@addEvent' ]);
Route::get('event/add', [ 'before' => 'crsf' , 'as' => 'addEvent', 'uses' => 'eventController@addEvent' ]);

?>