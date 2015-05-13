<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Detail Brick</h2>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">Brick : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="brick.path" class="help-block">{{ brick.path }}</span>
			<span ng-if="!brick.path" class="help-block">NONE</span>
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
						<th>Block Size</th>
						<th>Read</th>
						<th>Write</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="cumulative in cumulatives = (brick.cumulatives)" ng-show="cumulatives.length">
						<td style="vertical-align: middle;">{{ cumulative.block_size }}</td>
						<td style="vertical-align: middle;">{{ cumulative.read }}</td>
						<td style="vertical-align: middle;">{{ cumulative.write }}</td>
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
						<th style="width: 120px;">%-latency</th>
						<th style="width: 120px;">Avg-latency</th>
						<th style="width: 120px;">Min-Latency</th>
						<th>Max-Latency</th>
						<th style="width: 120px;">calls</th>
						<th style="width: 120px;">Fop</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="latency in latencies = (brick.latencies)" ng-show="latencies.length">
						<td style="vertical-align: middle;">{{ latency.percent }}</td>
						<td style="vertical-align: middle;">{{ latency.avg }}</td>
						<td style="vertical-align: middle;">{{ latency.min }}</td>
						<td style="vertical-align: middle;">{{ latency.max }}</td>
						<td style="vertical-align: middle;">{{ latency.calls }}</td>
						<td style="vertical-align: middle;">{{ latency.fop }}</td>
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
			<span ng-if="brick.duration" class="help-block">{{ brick.duration }}</span>
			<span ng-if="!brick.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Bytes Read : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="brick.bytes_read" class="help-block">{{ brick.bytes_read }}</span>
			<span ng-if="!brick.bytes_read" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Bytes Written : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="brick.bytes_written" class="help-block">{{ brick.bytes_written }}</span>
			<span ng-if="!brick.bytes_written" class="help-block">NONE</span>
		</div>
	</div>
	<div class="form-group text-right">	
		<button type="button" class="btn btn-default btn-lg" ng-click="cancel()">List</button>
	</div>
</div>