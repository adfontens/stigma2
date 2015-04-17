<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stigma2</title>

	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap-3.3.2/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/font-awesome-4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style.css">

	<script data-main="resources/js/main" src="resources/lib/require/require.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse">
			<div class="container" style="margin-left: 20px;">
				<div class="navbar-header">
					<a class="navbar-brand" ui-sref="dashboardGlusterfsList.workbench">Stigma2</a>
				</div>

				<!-- <ul class="nav navbar-nav navbar-right">
					<li><a ng-click="logout()"><i class="fa fa-lock"></i> Logout</a></li>
				</ul> -->
			</div>
		</nav>
	</header>
	<aside class="sidebar">
		<div class="panel panel-primary">
			<div class="panel-heading">Dashboard</div>
			<!-- <div class="panel-body"><a ui-sref="dashboardOverviewList">Overview</a></div> -->
			<div class="panel-body"><a ui-sref="dashboardGlusterfsList.workbench">GlusterFS</a></div>
		</div>
		<p>
		<div class="panel panel-default">
			<div class="panel-heading">Host</div>
			<div class="panel-body"><a ui-sref="hostList({current_state:'', has_been_checked:''})">All</a></div>
			<div class="panel-body"><a ui-sref="hostList({current_state:'0', has_been_checked:'1'})">Up</a></div>
			<div class="panel-body"><a ui-sref="hostList({current_state:'1', has_been_checked:'1'})">Down</a></div>
			<div class="panel-body"><a ui-sref="hostList({current_state:'2', has_been_checked:'1'})">Unreachable</a></div>
			<div class="panel-body"><a ui-sref="hostList({current_state:'0', has_been_checked:'0'})">Pending</a></div>
		</div>
		<p>
		<div class="panel panel-default">
			<div class="panel-heading">Service</div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'', has_been_checked:''})">All</a></div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'0', has_been_checked:'1'})">OK</a></div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'1', has_been_checked:'1'})">Warning</a></div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'2', has_been_checked:'1'})">Critical</a></div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'3', has_been_checked:'1'})">Unknown</a></div>
			<div class="panel-body"><a ui-sref="serviceList({current_state:'0', has_been_checked:'0'})">Pending</a></div>
		</div>
		<p>
		<div class="panel panel-warning">
			<div class="panel-heading">Report</div>
			<div class="panel-body"><a ui-sref="reportGraph"><i class="fa fa-line-chart"></i> Graph</a></div>
			<div class="panel-body"><a ui-sref="reportLogList">Log</a></div>
		</div>
		<p>
		<div class="panel panel-danger">
			<div class="panel-heading">System</div>
			<div class="panel-body"><a ui-sref="systemConfigurationList">Configuration</a></div>
		</div>
	</aside>
	<article class="mainContents">
		<div ui-view></div>
	</article>
	<footer class="text-center footerbar">
		Copyright 2010 All Rights Reserved. <a href="http://www.zespro.co.kr">Zespro</a>
	</footer>
</body>
</html>