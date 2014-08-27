<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function register(){
		return View::make('users.register');
	}

	public function saveRegister(){
		Eloquent::unguard();
		User::create(array('username'=>Input::get('username'), 'names'=>Input::get('name'), 'password'=>Hash::make(Input::get('password')), 'email'=>Input::get('email'), 'phone'=>Input::get('phone'), 'address'=>Input::get('address'),'level'=>0));
		return Redirect::intended('/');
	}

	public function login(){
		return View::make('users.login');
	}

	public function saveLogin(){
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password')))){
    		return Redirect::intended('/');
		}else{
			return Redirect::back();
		}
	}

}