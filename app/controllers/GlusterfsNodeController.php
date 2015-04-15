<?php

class GlusterfsNodeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$result = array(
			array("name" => "gv00", "nodes" => array(
				array("name" => "node1", "procs" => "112", "total_cpu" => "0.44", "idle_cpu" => "99.56", "memory" => "10.47", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "node2", "procs" => "109", "total_cpu" => "0.32", "idle_cpu" => "99.68", "memory" => "12.30", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "node3", "procs" => "109", "total_cpu" => "1.05", "idle_cpu" => "98.95", "memory" => "12.43", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "node4", "procs" => "107", "total_cpu" => "0.83", "idle_cpu" => "99.17", "memory" => "12.50", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
			)),
			array("name" => "gv01", "nodes" => array(
				array("name" => "gfs1", "procs" => "114", "total_cpu" => "0.73", "idle_cpu" => "99.27", "memory" => "10.47", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs2", "procs" => "104", "total_cpu" => "0.52", "idle_cpu" => "99.48", "memory" => "12.65", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs3", "procs" => "103", "total_cpu" => "0.45", "idle_cpu" => "99.55", "memory" => "12.51", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs4", "procs" => "107", "total_cpu" => "1.03", "idle_cpu" => "98.97", "memory" => "12.77", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs5", "procs" => "103", "total_cpu" => "0.48", "idle_cpu" => "99.52", "memory" => "11.43", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs6", "procs" => "106", "total_cpu" => "0.31", "idle_cpu" => "99.69", "memory" => "13.30", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs7", "procs" => "111", "total_cpu" => "1.25", "idle_cpu" => "98.75", "memory" => "11.84", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
				array("name" => "gfs8", "procs" => "104", "total_cpu" => "0.43", "idle_cpu" => "99.57", "memory" => "13.35", "swap" => "0.00",
					"procs_status" => "0", "cpu_status" => "0", "memory_status" => "0", "swap_status" => "0"
				),
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
