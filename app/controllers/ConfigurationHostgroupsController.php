<?php

class ConfigurationHostgroupsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /hostgroups
	 *
	 * @return Response
	 */
	public function index()
	{
		$hostgroups = $this->getList();

		return Response::json($hostgroups);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hostgroups/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$hosts = DB::table("objects")->select("first_name")->where("object_type", "=", "1")->get();
		$nonuse = array();

		foreach ($hosts as $host) {
			array_push($nonuse, $host->first_name);
		}

		$result = array(
			"use" => array(),
			"nonuse" => $nonuse
		);

		return Response::json($result);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hostgroups
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v4uuid = UUID::v4();

		Object::create(array(
			"uuid" => $v4uuid,
			"object_type" => "3",
			"first_name" => $input["hostgroup_name"],
			"second_name" => "",
			"is_active" => "1"
		));

		Hostgroup::create(array(
			"object_uuid" => $v4uuid,
			"description" => $input["alias"]
		));

		foreach ($input["members"] as $value) {
			HostgroupMember::create(array(
				"hostgroup_fk" => $v4uuid,
				"member" => $value
			));
		}

		$this->writeConfig();
		// TODO nagios restart

		return Response::json(array("success" => true));
	}

	/**
	 * Display the specified resource.
	 * GET /hostgroups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hostgroupDetail = DB::table("hostgroups")
				->join("objects", "hostgroups.object_uuid", "=", "objects.uuid")
				->join("hostgroup_members", "hostgroups.object_uuid", "=", "hostgroup_members.hostgroup_fk")
				->select("hostgroup_members.member")
				->where("hostgroups.object_uuid", "=", $id)
				->orderBy("hostgroup_members.id", "asc")
				->get();

		$result = array(
			"hostgroupDetail" => $hostgroupDetail
		);

		return Response::json($result);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hostgroups/{id}/edit
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
	 * PUT /hostgroups/{id}
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
	 * DELETE /hostgroups/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	private function getList()
	{
		$query = DB::table("hostgroups")
				->join("objects", "hostgroups.object_uuid", "=", "objects.uuid")
				->select("hostgroups.id", "hostgroups.object_uuid", "hostgroups.description", "objects.first_name as hostgroup_name")
				->orderBy("hostgroups.created_at", "desc");
		return $query->get();
	}

	private function writeConfig()
	{
		global $config;

		$file = $config["NAGIOS_OBJECTS_DIR"].$config["NAGIOS_HOSTS_CFG"];
		$hosts = DB::table("host_details")->get();
		$contents = "";
		$objects = array();

		if (file_exists($file)) {
			unlink($file);
		}

		foreach ($hosts as $host)
		{
			$host_fk = $host->host_fk;
			$object = array();
			if (array_key_exists($host_fk, $objects)) $object = $objects[$host_fk];

			$object[$host->key] = $host->value;
			$objects[$host_fk] = $object;
		}

		foreach (array_keys($objects) as $host_fk)
		{
			$object = $objects[$host_fk];
			$contents .= $config["NAGIOS_DEFINE_HOST"]."{\n";
			
			foreach (array_keys($object) as $key)
			{
				$contents .= "\t".$key."\t".$object[$key]."\n";
			}
			$contents .= "}\n\n";
		}

		file_put_contents($file, $contents, FILE_APPEND | LOCK_EX);
	}

}