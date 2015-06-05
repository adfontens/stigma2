<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Detail Node</h2>
	</div>

	<div class="form-group" ng-repeat="prop in node">
		<div class="col-lg-3">
			<span class="help-block">{{ prop.key }} : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="prop.value" class="help-block">{{ prop.value }}</span>
			<span ng-if="!prop.value" class="help-block">NONE</span>
		</div>
	</div>
	<div class="form-group text-right">	
		<button type="button" class="btn btn-default btn-lg" ng-click="cancel()">List</button>
	</div>
	<div class="form-group">
		<x-chart-test2></x-chart-test2>
		<x-chart-test></x-chart-test>
	</div>
</div>