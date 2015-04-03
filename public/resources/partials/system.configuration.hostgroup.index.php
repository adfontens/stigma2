<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Hostgroups List</h2>
	</div>

	<div>
		<div class="form-inline text-right">
			<i class="fa fa-search"></i> <input type="text" class="form-control" ng-model="search.hostgroup_name" placeholder="Search">
		</div>
		
		<p><a ng-click="createHostgroup()" class="btn btn-small">create new hostgroup</a></p>
		<table class="table table-striped table-condensed">
			<thead>
				<tr>
					<th style="width: 180px;">Hostgroup</th>
					<th>Description</th>
					<th style="width: 55px;"> </th>
					<th style="width: 75px;"> </th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="hostgroup in hostgroups | filter:search" ng-show="hostgroups.length">
					<td class="listTdOverflow" style="vertical-align: middle;">{{ hostgroup.hostgroup_name }}</td>
					<td class="listTdOverflow" style="vertical-align: middle;">{{ hostgroup.description }}</td>
					<td><a ng-click="editHostgroup(hostgroup.id)" class="btn btn-small btn-primary">edit</a></td>
					<td><a ng-click="deleteHostgroup(hostgroup.id)" class="btn btn-small btn-danger">delete</a></td>
				</tr>
				<tr ng-show="!hostgroups.length">
					<td colspan="4"><strong>No hostgroups.</strong></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>