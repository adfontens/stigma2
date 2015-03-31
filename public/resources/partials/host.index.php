<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Hosts List</h2>
	</div>

	<div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th style="min-width: 80px;">Host</th>
					<th style="min-width: 80px;">Status</th>
					<th style="min-width: 80px;">Last Check</th>
					<th style="min-width: 80px;">Duration</th>
					<th style="min-width: 80px;">Status Information</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="host in hosts" ng-show="hosts.length">
					<td><a ng-click="detailHost(host.object_uuid)">{{ host.host_name }}</a></td>
					<td ng-if="host.current_state === '0'">Up</td>
					<td ng-if="host.current_state === '1'">Down</td>
					<td ng-if="host.current_state === '2'">Unreachable</td>
					<td>{{ formatDate(host.last_check) }}</td>
					<td>{{ formatDuration(host.last_state_change) }}</td>
					<td>{{ host.plugin_output }}</td>
				</tr>
				<tr ng-show="!hosts.length">
					<td colspan="5"><strong>No hosts.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>