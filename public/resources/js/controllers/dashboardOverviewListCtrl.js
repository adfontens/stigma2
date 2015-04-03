define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardOverviewListCtrl', [
			'$scope', 'DashboardOverviewFactory',
			function($scope, DashboardOverviewFactory) {
				DashboardOverviewFactory.list()
					.then(function(data) {
						$scope.overviewData = data;
					});
			}
		]);
	}
);