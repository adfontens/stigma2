<?php

require dirname(__FILE__)."/../utils/config.inc.php";

class OverviewController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /overview
	 *
	 * @return Response
	 */
	public function index()
	{
		global $config;

		$command = "nagiostats | awk '/"
				.$config["OVERVIEW_SERVICES_STATUS"]
				."/ || /".$config["OVERVIEW_HOSTS_STATUS"]
				."/ || /".$config["OVERVIEW_TOTAL_SERVICES"]
				."/ || /".$config["OVERVIEW_SERVICES_CHECKED"]
				."/ || /".$config["OVERVIEW_TOTAL_HOSTS"]
				."/ || /".$config["OVERVIEW_HOSTS_CHECKED"]
				."/'";
		$awk = shell_exec($command);
		$lines = explode(PHP_EOL, $awk);
		$memory = array();
		$result = array();

		foreach ($lines as $line) {
			$line = trim($line);
			if ($line === "") continue;
			$parts = preg_split('/:/', $line);
			$memory[$parts[0]] = $parts[1];
		}
		
		$hostTacticals = preg_split('/\//', $memory[$config["OVERVIEW_HOSTS_STATUS_POS"]]);
		$serviceTacticals = preg_split('/\//', $memory[$config["OVERVIEW_SERVICES_STATUS_POS"]]);
		$hostPending = intval($config["OVERVIEW_TOTAL_HOSTS"]) - intval($config["OVERVIEW_HOSTS_CHECKED"]);
		$servicePending = intval($config["OVERVIEW_TOTAL_SERVICES"]) - intval($config["OVERVIEW_SERVICES_CHECKED"]);

		$result = array(
			"host" => array(
				"up" => trim($hostTacticals[0]),
				"down" => trim($hostTacticals[1]),
				"unreachable" => trim($hostTacticals[2]),
				"pending" => $hostPending
			),
			"service" => array(
				"ok" => trim($serviceTacticals[0]),
				"warning" => trim($serviceTacticals[1]),
				"unknown" => trim($serviceTacticals[2]),
				"critical" => trim($serviceTacticals[3]),
				"pending" => $servicePending
			)
		);

		return Response::json($result);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /overview/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /overview
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /overview/{id}
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
	 * GET /overview/{id}/edit
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
	 * PUT /overview/{id}
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
	 * DELETE /overview/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}