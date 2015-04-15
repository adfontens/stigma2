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
			array("name" => "node01", "bricks" => array(
				array("name" => "0", "status" => "0"),
				array("name" => "1", "status" => "0"),
				array("name" => "2", "status" => "0"),
				array("name" => "3", "status" => "0"),
				array("name" => "4", "status" => "0"),
				array("name" => "5", "status" => "0"),
				array("name" => "6", "status" => "0"),
				array("name" => "7", "status" => "0"),
				array("name" => "8", "status" => "0"),
				array("name" => "9", "status" => "0"),
				array("name" => "10", "status" => "0"),
				array("name" => "11", "status" => "0"),
				array("name" => "12", "status" => "0"),
				array("name" => "13", "status" => "1"),
				array("name" => "14", "status" => "1"),
				array("name" => "15", "status" => "1"),
				array("name" => "16", "status" => "1"),
				array("name" => "17", "status" => "0"),
				array("name" => "18", "status" => "0"),
				array("name" => "19", "status" => "0"),
				array("name" => "20", "status" => "0"),
				array("name" => "21", "status" => "0"),
				array("name" => "22", "status" => "0"),
				array("name" => "23", "status" => "0"),
				array("name" => "24", "status" => "0"),
				array("name" => "25", "status" => "0"),
				array("name" => "26", "status" => "0"),
				array("name" => "27", "status" => "0"),
				array("name" => "28", "status" => "0"),
				array("name" => "29", "status" => "0"),
				array("name" => "30", "status" => "0"),
				array("name" => "31", "status" => "0"),
				array("name" => "32", "status" => "0"),
				array("name" => "33", "status" => "0"),
				array("name" => "34", "status" => "0"),
				array("name" => "35", "status" => "0"),
				array("name" => "36", "status" => "0"),
				array("name" => "37", "status" => "0"),
				array("name" => "38", "status" => "0"),
				array("name" => "39", "status" => "0"),
			)),
			array("name" => "node02", "bricks" => array(
				array("name" => "40", "status" => "0"),
				array("name" => "41", "status" => "0"),
				array("name" => "42", "status" => "0"),
				array("name" => "43", "status" => "0"),
				array("name" => "44", "status" => "0"),
				array("name" => "45", "status" => "0"),
				array("name" => "46", "status" => "0"),
				array("name" => "47", "status" => "0"),
				array("name" => "48", "status" => "0"),
				array("name" => "49", "status" => "0"),
				array("name" => "50", "status" => "0"),
				array("name" => "51", "status" => "0"),
				array("name" => "52", "status" => "0"),
				array("name" => "53", "status" => "0"),
				array("name" => "54", "status" => "0"),
				array("name" => "55", "status" => "0"),
				array("name" => "56", "status" => "0"),
				array("name" => "57", "status" => "2"),
				array("name" => "58", "status" => "0"),
				array("name" => "59", "status" => "0"),
				array("name" => "60", "status" => "0"),
				array("name" => "61", "status" => "0"),
				array("name" => "62", "status" => "0"),
				array("name" => "63", "status" => "0"),
				array("name" => "64", "status" => "0"),
				array("name" => "65", "status" => "0"),
				array("name" => "66", "status" => "0"),
				array("name" => "67", "status" => "0"),
				array("name" => "68", "status" => "0"),
				array("name" => "69", "status" => "0"),
				array("name" => "70", "status" => "0"),
				array("name" => "71", "status" => "0"),
				array("name" => "72", "status" => "0"),
				array("name" => "73", "status" => "0"),
				array("name" => "74", "status" => "0"),
				array("name" => "75", "status" => "0"),
				array("name" => "76", "status" => "0"),
				array("name" => "77", "status" => "0"),
				array("name" => "78", "status" => "0"),
				array("name" => "79", "status" => "0"),
			)),
			array("name" => "node03", "bricks" => array(
				array("name" => "80", "status" => "0"),
				array("name" => "81", "status" => "0"),
				array("name" => "82", "status" => "0"),
				array("name" => "83", "status" => "0"),
				array("name" => "84", "status" => "2"),
				array("name" => "85", "status" => "0"),
				array("name" => "86", "status" => "0"),
				array("name" => "87", "status" => "0"),
				array("name" => "88", "status" => "0"),
				array("name" => "89", "status" => "0"),
				array("name" => "90", "status" => "0"),
				array("name" => "91", "status" => "0"),
				array("name" => "92", "status" => "1"),
				array("name" => "93", "status" => "2"),
				array("name" => "94", "status" => "2"),
				array("name" => "95", "status" => "1"),
				array("name" => "96", "status" => "0"),
				array("name" => "97", "status" => "0"),
				array("name" => "98", "status" => "0"),
				array("name" => "99", "status" => "0"),
				array("name" => "100", "status" => "0"),
				array("name" => "101", "status" => "0"),
				array("name" => "102", "status" => "0"),
				array("name" => "103", "status" => "0"),
				array("name" => "104", "status" => "2"),
				array("name" => "105", "status" => "0"),
				array("name" => "106", "status" => "0"),
				array("name" => "107", "status" => "0"),
				array("name" => "108", "status" => "0"),
				array("name" => "109", "status" => "0"),
				array("name" => "110", "status" => "0"),
				array("name" => "111", "status" => "0"),
				array("name" => "112", "status" => "0"),
				array("name" => "113", "status" => "0"),
				array("name" => "114", "status" => "0"),
				array("name" => "115", "status" => "2"),
				array("name" => "116", "status" => "0"),
				array("name" => "117", "status" => "0"),
				array("name" => "118", "status" => "0"),
				array("name" => "119", "status" => "0"),
			)),
			array("name" => "node04", "bricks" => array(
				array("name" => "120", "status" => "0"),
				array("name" => "121", "status" => "0"),
				array("name" => "122", "status" => "0"),
				array("name" => "123", "status" => "0"),
				array("name" => "124", "status" => "0"),
				array("name" => "125", "status" => "0"),
				array("name" => "126", "status" => "0"),
				array("name" => "127", "status" => "0"),
				array("name" => "128", "status" => "0"),
				array("name" => "129", "status" => "0"),
				array("name" => "130", "status" => "0"),
				array("name" => "131", "status" => "0"),
				array("name" => "132", "status" => "0"),
				array("name" => "133", "status" => "0"),
				array("name" => "134", "status" => "0"),
				array("name" => "135", "status" => "0"),
				array("name" => "136", "status" => "0"),
				array("name" => "137", "status" => "0"),
				array("name" => "138", "status" => "0"),
				array("name" => "139", "status" => "0"),
				array("name" => "140", "status" => "0"),
				array("name" => "141", "status" => "0"),
				array("name" => "142", "status" => "0"),
				array("name" => "143", "status" => "0"),
				array("name" => "144", "status" => "0"),
				array("name" => "145", "status" => "0"),
				array("name" => "146", "status" => "0"),
				array("name" => "147", "status" => "0"),
				array("name" => "148", "status" => "0"),
				array("name" => "149", "status" => "0"),
				array("name" => "150", "status" => "0"),
				array("name" => "151", "status" => "0"),
				array("name" => "152", "status" => "0"),
				array("name" => "153", "status" => "0"),
				array("name" => "154", "status" => "0"),
				array("name" => "155", "status" => "0"),
				array("name" => "156", "status" => "0"),
				array("name" => "157", "status" => "0"),
				array("name" => "158", "status" => "0"),
				array("name" => "159", "status" => "0"),
			)),
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
