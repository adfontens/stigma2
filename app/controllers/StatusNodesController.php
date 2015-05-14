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
		$node = array(
			array("key" => "OS Version", "value" => "16 - 1"),
			array("key" => "Kernel Version", "value" => "3.3.0 - 4.fc16x86_64"),
			array("key" => "KVM Version", "value" => "0.15.1 - 4.fc16"),
			array("key" => "VDSM Version", "value" => "3.0.0.0"),
			array("key" => "SPICE Version", "value" => "0.10.1 - 1.fc16"),
			array("key" => "iSCSI Initiator Name", "value" => "iqn.1994-05.com.redhat.ea3"),
			array("key" => "Active VMs", "value" => "\0"),
			array("key" => "Memory Page Sharing", "value" => "Inactive"),
			array("key" => "Automatic Large Pages", "value" => "Always"),
			array("key" => "Number of CPUs", "value" => "2"),
			array("key" => "CPU Name", "value" => "Intel Conroe Family"),
			array("key" => "CPU Type", "value" => "Intel(R) Core(TM)2"),
			array("key" => "Physical Memory", "value" => "2378 MB total, 230 MB used, 2132 MB free"),
			array("key" => "Swap Size", "value" => "0 MB total, 0 MB used, 0 MB free"),
			array("key" => "Shared Memory", "value" => "0%"),
		);

		return $node;
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
				"cpu" => "1", "memory" => "20", "network" => "4"),
			array("name" => "node01", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1", "memory" => "20", "network" => "4"),
			array("name" => "node02", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1", "memory" => "20", "network" => "4"),
			array("name" => "node03", "ip" => "127.0.0.1", "status" => "OK", 
				"cpu" => "1", "memory" => "20", "network" => "4"),
		);

		return $result;
	}


}
