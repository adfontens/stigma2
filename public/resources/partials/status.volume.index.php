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
					<td style="vertical-align: middle;">{{ volume.space_used }}</td>
					<td style="vertical-align: middle;">{{ volume.activities }}</td>
				</tr>
				<tr ng-show="!volumes.length">
					<td colspan="6"><strong>No volumes.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>