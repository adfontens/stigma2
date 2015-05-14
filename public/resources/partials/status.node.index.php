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
					<td style="vertical-align: middle;"><a ng-click="detailNode(node.id)">{{ node.name }}</a></td>
					<td style="vertical-align: middle;">{{ node.ip }}</td>
					<td style="vertical-align: middle;">{{ node.status }}</td>
					<td style="vertical-align: middle;">
						<div class="progress" ng-if="node.cpu < 31">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="node.cpu" aria-valuemin="0" aria-valuemax="100" style="width:{{node.cpu}}%">
								{{ node.cpu }} %
							</div>
						</div>
						<div class="progress" ng-if="node.cpu > 30 && node.cpu < 71">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="node.cpu" aria-valuemin="0" aria-valuemax="100" style="width:{{node.cpu}}%">
								{{ node.cpu }} %
							</div>
						</div>
						<div class="progress" ng-if="node.cpu > 70">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="node.cpu" aria-valuemin="0" aria-valuemax="100" style="width:{{node.cpu}}%">
								{{ node.cpu }} %
							</div>
						</div>
					</td>
					<td style="vertical-align: middle;">
						<div class="progress" ng-if="node.memory < 31">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="node.memory" aria-valuemin="0" aria-valuemax="100" style="width:{{node.memory}}%">
								{{ node.memory }} %
							</div>
						</div>
						<div class="progress" ng-if="node.memory > 30 && node.memory < 71">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="node.memory" aria-valuemin="0" aria-valuemax="100" style="width:{{node.memory}}%">
								{{ node.memory }} %
							</div>
						</div>
						<div class="progress" ng-if="node.memory > 70">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="node.memory" aria-valuemin="0" aria-valuemax="100" style="width:{{node.memory}}%">
								{{ node.memory }} %
							</div>
						</div>
					</td>
					<td style="vertical-align: middle;">
						<div class="progress" ng-if="node.network < 31">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="node.network" aria-valuemin="0" aria-valuemax="100" style="width:{{node.network}}%">
								{{ node.network }} %
							</div>
						</div>
						<div class="progress" ng-if="node.network > 30 && node.network < 71">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="node.network" aria-valuemin="0" aria-valuemax="100" style="width:{{node.network}}%">
								{{ node.network }} %
							</div>
						</div>
						<div class="progress" ng-if="node.network > 70">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="node.network" aria-valuemin="0" aria-valuemax="100" style="width:{{node.network}}%">
								{{ node.network }} %
							</div>
						</div>
					</td>
				</tr>
				<tr ng-show="!nodes.length">
					<td colspan="6"><strong>No nodes.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>