<div>
	<div ng-if="$success" class="alert alert-success">
		<span>{{ $success }}</span>
	</div>
	<div ng-if="$info" class="alert alert-info">
		<span>{{ $info }}</span>
	</div>
	<div ng-if="$warning" class="alert alert-warning">
		<span>{{ $warning }}</span>
	</div>
	<div ng-if="$error" class="alert alert-danger">
		<span>{{ $error }}</span>
	</div>
	<tabset>
		<tab heading="Storages">Free space / Total Storages space</tab>
		<tab ng-repeat="tab in tabs" heading="{{tab.title}}" active="tab.active" disabled="tab.disabled">
			{{tab.content}}
		</tab>
	</tabset>
</div>