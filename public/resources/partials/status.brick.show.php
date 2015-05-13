<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Detail Brick</h2>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">Brick : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.path" class="help-block">{{ data.path }}</span>
			<span ng-if="!data.path" class="help-block">NONE</span>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">Cumulative Stats : </span>
		</div>
		<div class="col-lg-9">
			<table class="table table-striped table-condensed" style="table-layout: fixed;">
				<thead>
					<tr>
						<th style="width: 180px;"> </th>
						<th>Brick Size</th>
						<th style="width: 180px;">Read</th>
						<th style="width: 180px;">Write</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="command in commands" ng-show="commands.length">
						<td style="vertical-align: middle;">{{ command.command_name }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">Latency : </span>
		</div>
		<div class="col-lg-9">
			<table class="table table-striped table-condensed" style="table-layout: fixed;">
				<thead>
					<tr>
						<th style="width: 120px;">latency</th>
						<th style="width: 120px;">Avg-latency</th>
						<th style="width: 120px;">Min-Latency</th>
						<th>Max-Latency</th>
						<th style="width: 120px;">calls</th>
						<th style="width: 120px;">Fop</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="command in commands" ng-show="commands.length">
						<td style="vertical-align: middle;">{{ command.command_name }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
						<td style="vertical-align: middle;">{{ command.command_line }}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">Duration : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Bytes Read : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.bytes_read" class="help-block">{{ data.bytes_read }}</span>
			<span ng-if="!data.bytes_read" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Bytes Written : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.bytes_written" class="help-block">{{ data.bytes_written }}</span>
			<span ng-if="!data.bytes_written" class="help-block">NONE</span>
		</div>
	</div>
	<div class="form-group text-right">	
		<button type="button" class="btn btn-default btn-lg" ng-click="cancel()">List</button>
	</div>
</div>