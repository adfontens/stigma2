<div>
	<p></p>
	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th style="width: 180px;">Volume</th>
				<th style="width: 180px;">Node</th>
				<th>Bricks</th>
				<th style="width: 75px;">Total</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="volume in volumes = (glusterfsBrickData)" ng-show="volumes.length">
				<td><span class="btn btn-large btn-default" style="width: 100%;">{{volume.name}}</span></td>
				<td colspan="3">
					<table>
						<tr ng-repeat="node in nodes = (volume.nodes)" ng-show="nodes.length">
							<td style="width: 180px;"><span class="btn btn-small btn-primary" style="width: 95%;">{{node.name}}</span></td>
							<td>
								<div ng-repeat="brick in bricks = (node.bricks)" style="float: left; width: 50px;">
									<div class="brickBox">
										<div class="brickVerticalLine"></div>
										<div class="brickHorizontalLine"></div>
										<button ng-if="brick.status === '0'" type="button" class="btn btn-success btn-circle brickCircle">{{brick.name}}</button>
										<button ng-if="brick.status === '1'" type="button" class="btn btn-warning btn-circle brickCircle">{{brick.name}}</button>
										<button ng-if="brick.status === '2'" type="button" class="btn btn-danger btn-circle brickCircle">{{brick.name}}</button>
										<button ng-if="brick.status === '9'" type="button" class="btn btn-default btn-circle brickCircle disabled">{{brick.name}}</button>
									</div>
								</div>
							</td>
							<td style="width: 75px; text-align: center;">{{bricks.length}}</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr ng-show="!volumes.length">
				<td colspan="4"><strong>No volumes.</strong></td>
			</tr>
		</tbody>
	</table>
</div>