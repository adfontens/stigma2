<?php

require dirname(__FILE__)."/../utils/config.inc.php";

class StatusClustersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clusters = $this->getList();

		return Response::json($clusters);
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
			array("name" => "cluster00", "description" => "cluster00", "nodes" => array(
				array("name" => "node1", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node2", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node3", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node4", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
			)),
			array("name" => "cluster01", "description" => "cluster01", "nodes" => array(
				array("name" => "node1", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node2", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node3", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node4", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
			)),
			array("name" => "cluster02", "description" => "cluster02", "nodes" => array(
				array("name" => "node1", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node2", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node3", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node4", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
			)),
			array("name" => "cluster03", "description" => "cluster03", "nodes" => array(
				array("name" => "node1", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node2", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node3", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
				array("name" => "node4", "status" => "OK", "bricks" => array(
					array("name" => "1", "status" => "0"),
					array("name" => "2", "status" => "9"),
				)),
			)),
		);

		return $result;
	}


}
