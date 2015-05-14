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
		$brick = array(
			"path" => "/export/1",
			"cumulatives" => array(
				array("block_size" => "1b+", "read" => "0", "write" => "908"),
				array("block_size" => "32b+", "read" => "0", "write" => "28"),
				array("block_size" => "64b+", "read" => "0", "write" => "8"),
				array("block_size" => "128b+", "read" => "0", "write" => "5"),
				array("block_size" => "256b+", "read" => "6", "write" => "23"),
				array("block_size" => "512b+", "read" => "4", "write" => "16"),
				array("block_size" => "1024b+", "read" => "0", "write" => "15"),
				array("block_size" => "2048b+", "read" => "52", "write" => "120"),
				array("block_size" => "4096b+", "read" => "17", "write" => "863"),
				array("block_size" => "8192b+", "read" => "52", "write" => "234"),
				array("block_size" => "16384b+", "read" => "8", "write" => "134"),
				array("block_size" => "32768b+", "read" => "34", "write" => "286"),
				array("block_size" => "65536b+", "read" => "118", "write" => "1341"),
				array("block_size" => "131072b+", "read" => "622", "write" => "594"),
			),
			"latencies" => array(
				array("percent" => "4.82", "avg" => "1132.28", "min" => "21.00", "max" => "800970.00", "calls" => "4575", "fop" => "WRITE"),
				array("percent" => "5.70", "avg" => "156.47", "min" => "9.00", "max" => "665085.00", "calls" => "39163", "fop" => "READDIRP"),
				array("percent" => "11.35", "avg" => "315.02", "min" => "9.00", "max" => "1433947.00", "calls" => "38698", "fop" => "LOOKUP"),
				array("percent" => "11.88", "avg" => "1729.34", "min" => "21.00", "max" => "2569638.00", "calls" => "7382", "fop" => "FXATTROP"),
				array("percent" => "47.35", "avg" => "104235.02", "min" => "2485.00", "max" => "7789367.00", "calls" => "488", "fop" => "FSYNC"),
			),
			"duration" => "335",
			"bytes_read" => "94505058",
			"bytes_written" => "195571980",
		);

		return $brick;
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
				"space_used" => "20", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/2", 
				"space_used" => "29", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/3", 
				"space_used" => "30", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/4", 
				"space_used" => "31", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/5", 
				"space_used" => "70", "activities" => ""),
			array("status" => "UP", "server" => "127.0.0.1", "brick_directory" => "/export/6", 
				"space_used" => "71", "activities" => ""),
		);

		return $result;
	}


}
