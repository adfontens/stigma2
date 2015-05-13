<?php

class StatusBricksController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$bricks = $this->getList();

		return Response::json($bricks);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	private function getList() {
		$result = array(
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/1", 
				"space_used" => "20%", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/2", 
				"space_used" => "20%", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/3", 
				"space_used" => "20%", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/4", 
				"space_used" => "20%", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/5", 
				"space_used" => "20%", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/6", 
				"space_used" => "20%", "activities" => ""),
		);

		return $result;
	}


}
