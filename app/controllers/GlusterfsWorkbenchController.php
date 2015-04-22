<?php

require dirname(__FILE__)."/../utils/config.inc.php";

class GlusterfsWorkbenchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		global $config;

		$command = "nagiostats | awk '/"
				.$config["OVERVIEW_TOTAL_HOSTS"]
				."/ || /".$config["OVERVIEW_HOSTS_STATUS"]
				."/ || /".$config["OVERVIEW_SERVICES_STATUS"]
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

		$total_hosts = $memory[$config["OVERVIEW_TOTAL_HOSTS"]];
		$hostTacticals = preg_split('/\//', $memory[$config["OVERVIEW_HOSTS_STATUS_POS"]]);
		$up_hosts = trim($hostTacticals[0]);
		
		$serviceTacticals = preg_split('/\//', $memory[$config["OVERVIEW_SERVICES_STATUS_POS"]]);
		$warning_services = trim($serviceTacticals[1]);
		$critical_services = trim($serviceTacticals[3]);

		$result = array(
			"health" => intval($total_hosts) - intval($up_hosts),
			"total_hosts" => $total_hosts,
			"up_hosts" => $up_hosts,
			"warning_services" => $warning_services,
			"critical_services" => $critical_services,
			"up_volumes" => "2",
			"total_volumes" => "2",
			"up_bricks" => "12",
			"total_bricks" => "12",
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
