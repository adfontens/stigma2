<?php

class StatusVolumesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$volumes = $this->getList();

		return Response::json($volumes);
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
			array("name" => "gv00", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
			array("name" => "gv01", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
			array("name" => "gv02", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
			array("name" => "gv03", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
			array("name" => "gv04", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
			array("name" => "gv05", "cluster" => "cluster00", "volume_type" => "EXT 4", 
				"bricks" => "2 ok", "space_used" => "20%", "activities" => ""),
		);

		return $result;
	}


}
