<?php

class GlusterfsBrickController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$result = array(
			array("name" => "gv00", "nodes" => array(
				array("name" => "node01", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "0"),
				)),
				array("name" => "node02", "bricks" => array(
					array("name" => "3", "status" => "0"),
					array("name" => "4", "status" => "1"),
				)),
				array("name" => "node03", "bricks" => array(
					array("name" => "5", "status" => "0"),
					array("name" => "6", "status" => "0"),
				)),
				array("name" => "node04", "bricks" => array(
					array("name" => "7", "status" => "0"),
					array("name" => "8", "status" => "2"),
				)),
			)),
			array("name" => "gv01", "nodes" => array(
				array("name" => "node01", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "0"),
				)),
				array("name" => "node02", "bricks" => array(
					array("name" => "3", "status" => "0"),
					array("name" => "4", "status" => "0"),
				)),
				array("name" => "node03", "bricks" => array(
					array("name" => "5", "status" => "0"),
					array("name" => "6", "status" => "0"),
				)),
				array("name" => "node04", "bricks" => array(
					array("name" => "7", "status" => "1"),
					array("name" => "8", "status" => "0"),
				)),
				array("name" => "node05", "bricks" => array(
					array("name" => "9", "status" => "0"),
					array("name" => "10", "status" => "0"),
				)),
				array("name" => "node06", "bricks" => array(
					array("name" => "11", "status" => "0"),
					array("name" => "12", "status" => "0"),
				)),
				array("name" => "node07", "bricks" => array(
					array("name" => "13", "status" => "0"),
					array("name" => "14", "status" => "0"),
				)),
				array("name" => "node08", "bricks" => array(
					array("name" => "15", "status" => "0"),
					array("name" => "16", "status" => "0"),
				)),
			))
		);

		return Response::json($result);
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


}
