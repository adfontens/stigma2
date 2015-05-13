<div class="col-md-11 col-md-offset-1">
	<div class="page-header">
		<h2>Detail Node</h2>
	</div>

	<div class="form-group">
		<div class="col-lg-3">
			<span class="help-block">OS Version : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Kernel Version : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">KVM Version : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">VDSM Version : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">SPICE Version : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">iSCSI Initiator Name : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Active VMs : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Memory Page Sharing : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Automatic Large Pages : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Number of CPUs : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">CPU Name : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">CPU Type : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Physical Memory : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.duration" class="help-block">{{ data.duration }}</span>
			<span ng-if="!data.duration" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Swap Size : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.bytes_read" class="help-block">{{ data.bytes_read }}</span>
			<span ng-if="!data.bytes_read" class="help-block">NONE</span>
		</div>

		<div class="col-lg-3">
			<span class="help-block">Shared Memory : </span>
		</div>
		<div class="col-lg-9">
			<span ng-if="data.bytes_written" class="help-block">{{ data.bytes_written }}</span>
			<span ng-if="!data.bytes_written" class="help-block">NONE</span>
		</div>
	</div>
	<div class="form-group text-right">	
		<button type="button" class="btn btn-default btn-lg" ng-click="cancel()">List</button>
	</div>
</div>