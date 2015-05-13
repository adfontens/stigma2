<?php

class StatusNodesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$nodes = $this->getList();

		return Response::json($nodes);
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
			array("name" => "node00", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1%", "memory" => "20%", "network" => "4%"),
			array("name" => "node01", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1%", "memory" => "20%", "network" => "4%"),
			array("name" => "node02", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1%", "memory" => "20%", "network" => "4%"),
			array("name" => "node03", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1%", "memory" => "20%", "network" => "4%"),
		);

		return $result;
	}


}
