<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('guests',function(){
	$guests = Guest::all();
	
	return View::make('guests.index')->with('guests',$guests);
});

Route::get('guests/create',function(){
	return View::make('guests.create');
});

Route::post('guests',function(){
	$validator = Validator::make(Input::all(),['name' =>'required','message'=>'required']);
	if($validator->fails()) return Redirect::back()->withFlashMessage('Please fill out both inputs.');
	Guest::create([
		'name' => Input::get('name'),
		'message' => Input::get('message')
	]);

	return Redirect::to('guests');
});
