<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>GlusterFS</h2>
	</div>

	<div>
		<tabset>
			<tab ng-repeat="tab in tabs" heading="{{tab.title}}" select="tab.select">
				<a ui-sref="{{tab.content}}"></a>
				<div ui-view></div>
			</tab>
		</tabset>
	</div>
</div>