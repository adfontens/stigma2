<div>
	<p></p>
	<table class="table table-striped table-condensed">
		<thead>
			<tr>
				<th style="width: 180px;">Volume</th>
				<th style="width: 180px;">Node</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="volume in volumes = (glusterfsNodeData)" ng-show="volumes.length">
				<td><span class="btn btn-large btn-default" style="width: 100%;">{{volume.name}}</span></td>
				<td colspan="2">
					<table>
						<tr ng-repeat="node in nodes = (volume.nodes)" ng-show="nodes.length">
							<td style="width: 180px;"><span class="btn btn-small btn-primary" style="width: 95%;">{{node.name}}</span></td>
							<td>
								<div style="float: left; margin-right: 5px; margin-bottom: 5px;">
									<span ng-if="node.procs_status === '0'" class="btn btn-small btn-success" style="width: 180px;">PROC OK: {{node.procs}} processes</span>
									<span ng-if="node.procs_status === '1'" class="btn btn-small btn-warning" style="width: 180px;">PROC OK: {{node.procs}} processes</span>
									<span ng-if="node.procs_status === '2'" class="btn btn-small btn-danger" style="width: 180px;">PROC OK: {{node.procs}} processes</span>
								</div>
								<div style="float: left; margin-right: 5px; margin-bottom: 5px;">
									<span ng-if="node.cpu_status === '0'" class="btn btn-small btn-success" style="width: 300px;">CPU OK: Total CPU: {{node.total_cpu}}% Idle CPU: {{node.idle_cpu}} %</span>
									<span ng-if="node.cpu_status === '1'" class="btn btn-small btn-warning" style="width: 300px;">CPU OK: Total CPU: {{node.total_cpu}}% Idle CPU: {{node.idle_cpu}} %</span>
									<span ng-if="node.cpu_status === '2'" class="btn btn-small btn-danger" style="width: 300px;">CPU OK: Total CPU: {{node.total_cpu}}% Idle CPU: {{node.idle_cpu}} %</span>
								</div>
								<div style="float: left; margin-right: 5px; margin-bottom: 5px;">
									<span ng-if="node.memory_status === '0'" class="btn btn-small btn-success" style="width: 190px;">MEMORY OK: {{node.memory}}% used</span>
									<span ng-if="node.memory_status === '1'" class="btn btn-small btn-warning" style="width: 190px;">MEMORY OK: {{node.memory}}% used</span>
									<span ng-if="node.memory_status === '2'" class="btn btn-small btn-danger" style="width: 190px;">MEMORY OK: {{node.memory}}% used</span>
								</div>
								<div style="float: left; margin-right: 5px; margin-bottom: 5px;">
									<span ng-if="node.swap_status === '0'" class="btn btn-small btn-success" style="width: 160px;">SWAP OK: {{node.swap}}% used</span>
									<span ng-if="node.swap_status === '1'" class="btn btn-small btn-warning" style="width: 160px;">SWAP OK: {{node.swap}}% used</span>
									<span ng-if="node.swap_status === '2'" class="btn btn-small btn-danger" style="width: 160px;">SWAP OK: {{node.swap}}% used</span>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr ng-show="!volumes.length">
				<td colspan="3"><strong>No volumes.</strong></td>
			</tr>
		</tbody>
	</table>
</div>