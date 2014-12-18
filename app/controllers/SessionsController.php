<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		if(Auth::user()) return Redirect::to('/admin');
		return View::make('sessions.index');
	}

	public function create()
	{
		if(Auth::user()) return Redirect::to('/admin');

		return View::make('sessions.index');
	}

	public function store()
	{
		$input = Input::all();

//		dd($input);

//		$attempt = Auth::attempt([
//			'email' => $input['email'],
//			'password' => $input['password']
//		]);
//
//
//		//$attempt = Auth::attempt([ 'email' => $input['email'], 'password' => $input['password'] ]);
//
		$attempt = Auth::user()->attempt(array(
			'email'     => $input['email'],
			'password'  => $input['password']
		));

		if ($attempt) return 'Welcome '. Auth::user()->get()->username; //Redirect::intended('/');
//
		dd('problem');
	}

	public function destroy(){

	}





}
