<div>
	<tabset>
		<tab ng-repeat="tab in tabs" heading="{{tab.heading}}" ui-sref="{{tab.route}}" active="tab.active"></tab>
	</tabset>
	<div ui-view></div>
</div>