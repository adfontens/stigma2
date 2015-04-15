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
				array("name" => "node1", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node2", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node3", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node4", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
			)),
			array("name" => "gv01", "nodes" => array(
				array("name" => "gfs1", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs2", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs3", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs4", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs5", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs6", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs7", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "gfs8", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
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
