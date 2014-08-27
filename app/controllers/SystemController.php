<?php

class SystemController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /system
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /system/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /system
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /system/{id}
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
	 * GET /system/{id}/edit
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
	 * PUT /system/{id}
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
	 * DELETE /system/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function search(){
		$data['from'] = City::find(Input::get('from'));
		$data['destination'] = City::find(Input::get('destination'));
		if(Input::get('from') == Input::get('destination')){
			$schedule = Schedule::where('from', Input::get('from'))->where('destination', Input::get('from'))->get();
			$listing = array();
			foreach ($schedule as $schedule_detail) {
				$type = VehicleType::find($schedule_detail->type);
				$list = null;
				if($type->model == 'CarRental'){
					$list = CarRental::where('city_id', Input::get('from'))->get();
				}else if($type->model == 'Taxi'){
					$list = Taxi::where('city_id', Input::get('from'))->get();
				}
				array_push($listing, $list);
			}
			$content['listing'] = $listing;
			$content['city'] = $data['from'];
			return View::make('search.search', $data)->nest('search_view','search.search-internal', $content);
		}
	}

}
