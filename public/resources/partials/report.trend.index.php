<div ng-controller="ReportTrendListCtrl">
	<div class="col-md-11 col-md-offset-1">
		<div class="page-header">
			<h2>Host and Service State Trends</h2>
		</div>

		<div>
			<div ng-if="step == '1'">
				<h4>Step 1: Select Report Type</h4>
				<p><select ng-options="obj.text for obj in types track by obj.text" ng-model="trendData.type"></select>
				<p><button type="button" class="btn btn-sm" ng-click="continueStep2()">Continue to Step 2</button>
			</div>
			<div ng-if="step == '2'">
				<h4>Step 2: Select {{ trendData.type.text }}</h4>
				<p><span>{{ trendData.type.text }} : </span>
				<select ng-options="obj.text for obj in objects track by obj.text" ng-model="trendData.object"></select>
				<p><button type="button" class="btn btn-sm" ng-click="continueStep3()">Continue to Step 3</button>
			</div>
			<div ng-if="step == '3'">
				<h4>Step 3: Select Report Options</h4>
				<p><span>Report period : </span>
				<select ng-options="obj.text for obj in periods track by obj.text" ng-model="trendData.period"></select>
				<p><button type="button" class="btn btn-sm" ng-click="createReport()">Create Report</button>
			</div>
		</div>
	</div>
</div>