<div>
	<p></p>
	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th style="width: 180px;">Node</th>
				<th>Bricks</th>
				<th style="width: 75px;">Total</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="node in nodes" ng-show="nodes.length">
				<td><span class="btn btn-small btn-primary">{{node.name}}</span></td>
				<td>
					<div ng-repeat="brick in bricks = (node.bricks)" style="float: left; margin-right: 5px; margin-bottom: 5px; width: 50px;">
						<span ng-if="brick.status === '0'" class="btn btn-small btn-success" style="width: 50px;">{{brick.name}}</span>
						<span ng-if="brick.status === '1'" class="btn btn-small btn-warning" style="width: 50px;">{{brick.name}}</span>
						<span ng-if="brick.status === '2'" class="btn btn-small btn-danger" style="width: 50px;">{{brick.name}}</span>
					</div>
				</td>
				<td>{{bricks.length}}</td>
			</tr>
			<tr ng-show="!nodes.length">
				<td colspan="4"><strong>No nodes.</strong></td>
			</tr>
		</tbody>
	</table>
</div>