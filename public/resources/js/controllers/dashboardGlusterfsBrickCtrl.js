define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsBrickCtrl', [
			'$scope', 'DashboardGlusterfsBrickFactory',
			function($scope, DashboardGlusterfsBrickFactory) {
				DashboardGlusterfsBrickFactory.list()
					.then(function(data) {
						$scope.glusterfsBrickData = data;
					});
			}
		]);
	}
);