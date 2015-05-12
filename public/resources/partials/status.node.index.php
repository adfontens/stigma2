<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Nodes List</h2>
	</div>

	<div>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>IP</th>
					<th>Status</th>
					<th>CPU</th>
					<th>Memory</th>
					<th>Network</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="node in nodes" ng-show="nodes.length">
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ node.node_name }}</td>
				</tr>
				<tr ng-show="!nodes.length">
					<td colspan="6"><strong>No nodes.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>