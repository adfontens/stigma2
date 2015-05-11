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
					<a class="navbar-brand" ui-sref="dashboardGlusterfs.workbench">Stigma2</a>
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
			<div class="panel-body"><a ui-sref="dashboardGlusterfs.workbench">GlusterFS</a></div>
		</div>
		<p>
		<div class="panel panel-default">
			<div class="panel-heading">Current Status</div>
			<div class="panel-body"><a ui-sref="statusClusterList">Clusters</a></div>
			<div class="panel-body"><a ui-sref="statusNodeList">Nodes</a></div>
			<div class="panel-body"><a ui-sref="statusVolumeList">Volumes</a></div>
			<div class="panel-body"><a ui-sref="statusBrickList">Bricks</a></div>
		</div>
		<p>
		<div class="panel panel-warning">
			<div class="panel-heading">History</div>
			<div class="panel-body"><a ui-sref="historyGraph"><i class="fa fa-line-chart"></i> Graph</a></div>
			<div class="panel-body"><a ui-sref="historyLog">Log</a></div>
			<div class="panel-body"><a ui-sref="historyReport">Report</a></div>
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