define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsNodeCtrl', [
			'$scope', 'DashboardGlusterfsNodeFactory',
			function($scope, DashboardGlusterfsNodeFactory) {
				DashboardGlusterfsNodeFactory.list()
					.then(function(data) {
						$scope.glusterfsNodeData = data;
					});
			}
		]);
	}
);