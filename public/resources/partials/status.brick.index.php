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
					<td style="vertical-align: middle;">
						<div class="progress" ng-if="brick.space_used < 31">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="brick.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{brick.space_used}}%">
								{{ brick.space_used }} %
							</div>
						</div>
						<div class="progress" ng-if="brick.space_used > 30 && brick.space_used < 71">
							<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="brick.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{brick.space_used}}%">
								{{ brick.space_used }} %
							</div>
						</div>
						<div class="progress" ng-if="brick.space_used > 70">
							<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="brick.space_used" aria-valuemin="0" aria-valuemax="100" style="width:{{brick.space_used}}%">
								{{ brick.space_used }} %
							</div>
						</div>
					</td>
					<td style="vertical-align: middle;">{{ brick.activities }}</td>
				</tr>
				<tr ng-show="!bricks.length">
					<td colspan="5"><strong>No bricks.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>