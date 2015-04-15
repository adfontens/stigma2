define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsWorkbenchCtrl', [
			'$scope', 'DashboardGlusterfsWorkbenchFactory',
			function($scope, DashboardGlusterfsWorkbenchFactory) {
				DashboardGlusterfsWorkbenchFactory.list()
					.then(function(data) {
						$scope.glusterfsWorkbenchData = data;
					});
			}
		]);
	}
);