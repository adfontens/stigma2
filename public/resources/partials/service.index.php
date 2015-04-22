<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Services List</h2>
	</div>

	<div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th style="min-width: 80px;">Host</th>
					<th style="min-width: 80px;">Service</th>
					<th style="min-width: 80px;">Status</th>
					<th style="min-width: 80px;">Last Check</th>
					<th style="min-width: 80px;">Duration</th>
					<th style="min-width: 80px;">Attempt</th>
					<th style="min-width: 80px;">Status Information</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="service in filteredServices = (services | filter: {current_state: current_state, has_been_checked: has_been_checked})" ng-show="filteredServices.length">
					<td><a ng-click="detailHost(service.host_uuid)">{{ service.host_name }}</a></td>
					<td><a ng-click="detailService(service.service_uuid)">{{ service.service_description }}</a></td>
					<td ng-if="service.current_state === '0' && service.has_been_checked !== '0'">OK</td>
					<td ng-if="service.current_state === '1'">Warning</td>
					<td ng-if="service.current_state === '2'">Critical</td>
					<td ng-if="service.current_state === '3'">Unknown</td>
					<td ng-if="service.current_state === '0' && service.has_been_checked === '0'">Pending</td>
					<td><span  ng-hide="service.has_been_checked === '0'">{{ formatDate(service.last_check) }}</span></td>
					<td><span  ng-hide="service.has_been_checked === '0'">{{ formatDuration(service.last_state_change) }}</span></td>
					<td><span  ng-hide="service.has_been_checked === '0'">{{ service.current_attempt }} / {{ service.max_attempts }}</span></td>
					<td><span  ng-hide="service.has_been_checked === '0'">{{ service.plugin_output }}</span></td>
				</tr>
				<tr ng-show="!filteredServices.length">
					<td colspan="7"><strong>No services.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>