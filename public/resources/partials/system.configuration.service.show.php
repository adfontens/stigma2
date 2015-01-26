<div ng-controller="SystemConfigurationServiceEditCtrl">
	<div class="col-md-11 col-md-offset-1">
		<div class="page-header">
			<h2>Detail Service</h2>
		</div>

		<div class="form-group">
			<table>
				<thead>
					<tr>
						<th class="hostCreationTitleName">Configuration Name</th>
						<th class="hostCreationTitleValue">Configuration Value</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="rowContents in serviceDetail">
						<td>
							<input type="text" class="form-control input-sm" ng-model="rowContents.key" ng-readonly="true" />
						</td>
						<td>
							<input type="text" class="form-control input-sm" ng-model="rowContents.value" ng-readonly="true" />
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="form-group text-right">	
			<button type="button" class="btn btn-lg" ng-click="list()">List</button>
			<button type="button" class="btn btn-primary btn-lg" ng-click="editService()">Modify</button>
		</div>
	</div>
</div>