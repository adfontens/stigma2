<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Clusters List</h2>
	</div>

	<div>
		<div ng-repeat="cluster in clusters" ng-show="clusters.length" style="background: #444; padding: 10px; margin-bottom: 15px;">
			<div>
				<label class="control-label" for="cluster_name" style="width:150px;">Name</label>
				<span>{{ cluster.name }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="cluster_description" style="width:150px;">Description</label>
				<span>{{ cluster.description }}</span>
			</div>
			<table class="table table-striped table-condensed">
				<thead>
					<tr>
						<th>Node</th>
						<th>Status</th>
						<th>Bricks</th>
						<th style="width: 75px;">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="node in nodes = (cluster.nodes)" ng-show="nodes.length">
						<td class="listTdOverflow" style="vertical-align: middle;">{{ node.name }}</td>
						<td><a ng-click="" class="btn btn-small btn-primary">edit</a></td>
						<td><a ng-click="" class="btn btn-small btn-danger">delete</a></td>
						<td><a ng-click="" class="btn btn-small btn-danger">delete</a></td>
					</tr>
					<tr ng-show="!nodes.length">
						<td colspan="4"><strong>No nodes.</strong></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div ng-show="!clusters.length">
			<strong>No clusters.</strong>
		</div>
	</div>
</div>