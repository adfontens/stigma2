<?php

require dirname(__FILE__)."/../utils/config.inc.php";

class ServicesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /services
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = $this->getList();

		return Response::json($services);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /services/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /services
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$result = array(
			"service" => array(
				"status" => "OK",
				"duration" => "0d 23h 31m 0s",
				"info" => "HTTP OK: HTTP/1.1 200 OK - 321 bytes in 0.001 second response time",
				"performance" => "time=0.000888s;;;0.000000 size=321B;;;0",
				"attempt" => "1/4  (HARD state)",
				"last_check" => "10-14-2014 04:07:33",
				"check_type" => "ACTIVE",
				"check_latency" => "0.156 / 0.008 seconds",
				"next_scheduled_active_check" => "10-14-2014 04:12:33",
				"last_state_change" => "10-14-2014 04:38:55",
				"last_notification" => "N/A (notification 0)",
				"host_flapping" => "NO (0.00% state change)",
				"scheduled_downtime" => "NO",
				"last_update" => "10-14-2014 04:11:21  ( 0d 0h 0m 5s ago)",
				"active_checks" => "ENABLED",
				"passive_checks" => "ENABLED",
				"obsessing" => "ENABLED",
				"notifications" => "DISABLED",
				"event_handler" => "ENABLED",
				"flap_detection" => "ENABLED"
			)
		);

		return Response::json($result);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /services/{id}/edit
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
	 * PUT /services/{id}
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
	 * DELETE /services/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function getList() {
		global $config;

		$file = new NagiosStatus();
		$result = $file->read($config["NAGIOS_STATUS_DAT"], $config["NAGIOS_STATUS_SERVICE"]);

		return $result;
	}

}