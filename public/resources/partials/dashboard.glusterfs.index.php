<div>
	<tabset>
		<tab select="trigger('workbench')">
			<tab-heading>Workbench</tab-heading>
			<a ui-sref="dashboardGlusterfsList.workbench" name="workbench"></a>
			<div ui-view></div>
		</tab>
		<tab select="trigger('node')">
			<tab-heading>Node</tab-heading>
			<a ui-sref="dashboardGlusterfsList.node" name="node"></a>
			<div ui-view></div>
		</tab>
		<tab select="trigger('brick')">
			<tab-heading>Brick</tab-heading>
			<a ui-sref="dashboardGlusterfsList.brick" name="brick"></a>
			<div ui-view></div>
		</tab>
		<tab select="trigger('network')">
			<tab-heading>Network</tab-heading>
			<a ui-sref="dashboardGlusterfsList.network" name="network"></a>
			<div ui-view></div>
		</tab>
	</tabset>
</div>