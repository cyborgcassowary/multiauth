<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		if(Auth::user()->check()) return Redirect::to('/admin');
		return View::make('sessions.index');
	}

	public function create()
	{
		if(Auth::user()->check()) return Redirect::to('/admin');
		return View::make('sessions.index');
	}

	public function store()
	{
		$input = Input::all();


		$attempt = Auth::user()->attempt(array(
			'email'     => $input['email'],
			'password'  => $input['password']
		));

		$admin = Auth::user()->get();
		

		if ($attempt) return View::make('sessions.store', compact('admin'));

//			'Welcome '. Auth::user()->get()->username;
//
		dd('problem');

	}

	public function adminPage(){
		$admin = Auth::user()->get();


		return View::make('sessions.store', compact('admin'));



		//View::make('students.show', compact('stu', 'miles', 'gooddeeds', 'rmiles'));
	}

	public function destroy(){
		if(Auth::user()){
			Auth::user()->logout();
			return Redirect::to('/');
		}
	}

}
