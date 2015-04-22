<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Create Hostgroup</h2>
	</div>

	<form ng-submit="saveHostgroup()">
		<div class="form-group">
			<table>
				<thead>
					<tr>
						<th class="tableTitleName">Configuration Name</th>
						<th class="tableTitleValue">Configuration Value</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span>hostgroup_name</span>
						</td>
						<td>
							<input type="text" class="form-control input-sm" ng-model="hostgroupData.hostgroup_name" />
						</td>
					</tr>
					<tr>
						<td>
							<span>alias</span>
						</td>
						<td>
							<input type="text" class="form-control input-sm" ng-model="hostgroupData.alias" />
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div style="height:80px;"></div>
		<div class="form-group">
			<p><h4 class="heading">Drag and drop the box</h4></p>
	        
			<div class="row">
				<div>
					<div class="ng-drop-title"><span class="ng-drop-title">Member</span></div>
					<div class="ng-drop-title"><span class="ng-drop-title-right">Nonmember</span></div>
				</div>
				<div ng-drop="true" ng-drop-success="onDropComplete1($data,$event)">
					<div ng-repeat="obj in use" ng-drag="true" ng-drag-data="obj" ng-drag-success="onDragSuccess1($data,$event)">
						{{obj}}
					</div>
				</div>

				<div ng-drop="true" ng-drop-success="onDropComplete2($data,$event)">
					<div ng-repeat="obj in nonuse" ng-drag="true" ng-drag-data="obj" ng-drag-success="onDragSuccess2($data,$event)">
						{{obj}}
					</div>
				</div> 
			</div>
		</div>
		<div class="form-group text-right">	
			<button type="button" class="btn btn-default btn-lg" ng-click="cancel()">Cancel</button>
			<button type="submit" class="btn btn-primary btn-lg">Submit</button>
		</div>
	</form>
</div>