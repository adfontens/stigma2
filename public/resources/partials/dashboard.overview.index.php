<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Tactical Overview</h2>
	</div>

	<div>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th colspan="4">Hosts</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width: 25%;">{{ overviewData.host.down }} Down</td>
					<td style="width: 25%;">{{ overviewData.host.unreachable }} Unreachable</td>
					<td style="width: 25%;">{{ overviewData.host.up }} Up</td>
					<td style="width: 25%;">{{ overviewData.host.pending }} Pending</td>
				</tr>
			</tbody>
		</table>
		<p>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th colspan="5">Services</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td style="width: 20%;">{{ overviewData.service.critical }} Critical</td>
					<td style="width: 20%;">{{ overviewData.service.warning }} Warning</td>
					<td style="width: 20%;">{{ overviewData.service.unknown }} Unknown</td>
					<td style="width: 20%;">{{ overviewData.service.ok }} Ok</td>
					<td style="width: 20%;">{{ overviewData.service.pending }} Pending</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>