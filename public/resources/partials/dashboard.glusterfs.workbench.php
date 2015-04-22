<div style="margin-top: 10px;">
	<div style="width: 24%; height: 200px; background: #212121; float: left; margin-right: 10px;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">HEALTH</span></div>
		<div style="height: 30%; text-align: center;">
			<span ng-if="glusterfsWorkbenchData.health == '0'" style="font-size: 52px; color: greenyellow;">OK</span>
			<span ng-if="glusterfsWorkbenchData.health != '0'" style="font-size: 52px; color: yellow;">WARNING</span>
		</div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;"></span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
	<div style="width: 24%; height: 200px; background: #212121; float: left; margin-right: 10px;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">NODE</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 52px;">{{glusterfsWorkbenchData.up_hosts}} / {{glusterfsWorkbenchData.total_hosts}}</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;">UP / TOTAL</span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
	<div style="width: 24%; height: 200px; background: #212121; float: left; margin-right: 10px;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">VOLUME</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 52px;">{{glusterfsWorkbenchData.up_volumes}} / {{glusterfsWorkbenchData.total_volumes}}</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;">UP / TOTAL</span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
	<div style="width: 24%; height: 200px; background: #212121; float: left;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">BRICK</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 52px;">{{glusterfsWorkbenchData.up_bricks}} / {{glusterfsWorkbenchData.total_bricks}}</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;">UP / TOTAL</span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
</div>
<div style="width: 98%; height: 300px; background: #212121; float: left; margin-top: 10px; margin-bottom: 10px;">
	<iframe src="http://106.243.87.166:6060/stigma2/resources/lib/grafana/index.html#dashboard/db/volume-usage" id="glusterfsVolumeUsage" frameborder="0" width="100%" height="100%">이 브라우저는 iframe을 지원하지 않습니다.</iframe>
</div>
<div>
	<div style="width: 48.7%; height: 235px; background: #212121; float: left; margin-right: 10px;">
		<iframe src="http://106.243.87.166:6060/stigma2/resources/lib/grafana/index.html#dashboard/db/load-avg" id="glusterfsLoadAvg" frameborder="0" width="100%" height="100%">이 브라우저는 iframe을 지원하지 않습니다.</iframe>
	</div>
	<div style="width: 24%; height: 235px; background: #212121; float: left; margin-right: 10px;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">WARNING</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 52px; color: yellow;">{{glusterfsWorkbenchData.warning_services}}</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;"></span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
	<div style="width: 24%; height: 235px; background: #212121; float: left;">
		<div style="height: 25%; padding: 10px;"><span style="font-size: 20px;">CRITICAL</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 52px; color: red;">{{glusterfsWorkbenchData.critical_services}}</span></div>
		<div style="height: 30%; text-align: center;"><span style="font-size: 16px;"></span></div>
		<div style="height: 15%; text-align: center;"><span style="font-size: 12px;"></span></div>
	</div>
</div>