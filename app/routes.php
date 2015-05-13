<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

// Route::group(array('before' => 'auth', 'prefix' => 'api'), function()
Route::group(array('prefix' => 'api'), function()
{
	Route::resource('glusterfs/brick', 'GlusterfsBrickController');
	Route::resource('glusterfs/node', 'GlusterfsNodeController');
	Route::resource('glusterfs/workbench', 'GlusterfsWorkbenchController');
	Route::resource('status/clusters', 'StatusClustersController');
	Route::resource('status/nodes', 'StatusNodesController');
	Route::resource('status/volumes', 'StatusVolumesController');
	Route::resource('status/bricks', 'StatusBricksController');
	Route::resource('configuration/commands', 'ConfigurationCommandsController');
	Route::resource('configuration/hostgroups', 'ConfigurationHostgroupsController');
	Route::resource('configuration/hosts', 'ConfigurationHostsController');
	Route::resource('configuration/services', 'ConfigurationServicesController');
	Route::resource('configuration/timeperiods', 'ConfigurationTimeperiodsController');
});

App::missing(function($exception)
{
	return Redirect::to('/');
});


// Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@showIndex'));
// Route::get('login', 'HomeController@showLogin');
// Route::post('login', 'HomeController@doLogin');
// Route::get('logout', 'HomeController@doLogout');