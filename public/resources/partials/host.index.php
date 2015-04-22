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
				<tr ng-repeat="host in filteredHosts = (hosts | filter: {current_state: current_state, has_been_checked: has_been_checked})" ng-show="filteredHosts.length">
					<td><a ng-click="detailHost(host.object_uuid)">{{ host.host_name }}</a></td>
					<td ng-if="host.current_state === '0' && host.has_been_checked !== '0'">Up</td>
					<td ng-if="host.current_state === '1'">Down</td>
					<td ng-if="host.current_state === '2'">Unreachable</td>
					<td ng-if="host.current_state === '0' && host.has_been_checked === '0'">Pending</td>
					<td><span  ng-hide="host.has_been_checked === '0'">{{ formatDate(host.last_check) }}</span></td>
					<td><span  ng-hide="host.has_been_checked === '0'">{{ formatDuration(host.last_state_change) }}</span></td>
					<td><span  ng-hide="host.has_been_checked === '0'">{{ host.plugin_output }}</span></td>
				</tr>
				<tr ng-show="!filteredHosts.length">
					<td colspan="5"><strong>No hosts.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>