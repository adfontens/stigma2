<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Volumes List</h2>
	</div>

	<div>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th>Name</th>
					<th>Cluster</th>
					<th>Volume Type</th>
					<th>Bricks</th>
					<th>Space Used</th>
					<th>Activities</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="volume in volumes" ng-show="volumes.length">
					<td style="vertical-align: middle;">{{ volume.name }}</td>
					<td style="vertical-align: middle;">{{ volume.cluster }}</td>
					<td style="vertical-align: middle;">{{ volume.volume_type }}</td>
					<td style="vertical-align: middle;">{{ volume.bricks }}</td>
					<td style="vertical-align: middle;">
						<div class="progress" ng-if="volume.space_used < 31">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="volume.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{volume.space_used}}%">
								{{ volume.space_used }} %
							</div>
						</div>
						<div class="progress" ng-if="volume.space_used > 30 && volume.space_used < 71">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="volume.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{volume.space_used}}%">
								{{ volume.space_used }} %
							</div>
						</div>
						<div class="progress" ng-if="volume.space_used > 70">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="volume.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{volume.space_used}}%">
								{{ volume.space_used }} %
							</div>
						</div>
					</td>
					<td style="vertical-align: middle;">{{ volume.activities }}</td>
				</tr>
				<tr ng-show="!volumes.length">
					<td colspan="6"><strong>No volumes.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>