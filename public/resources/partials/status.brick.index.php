<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Bricks List</h2>
	</div>

	<div>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th>Status</th>
					<th>Server</th>
					<th>Brick Directory</th>
					<th>Space Used</th>
					<th>Activities</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="brick in bricks" ng-show="bricks.length">
					<td style="vertical-align: middle;"><a ng-click="detailBrick(brick.id)">{{ brick.status }}</a></td>
					<td style="vertical-align: middle;">{{ brick.server }}</td>
					<td style="vertical-align: middle;">{{ brick.brick_directory }}</td>
					<td style="vertical-align: middle;">{{ brick.space_used }}</td>
					<td style="vertical-align: middle;">{{ brick.activities }}</td>
				</tr>
				<tr ng-show="!bricks.length">
					<td colspan="5"><strong>No bricks.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>