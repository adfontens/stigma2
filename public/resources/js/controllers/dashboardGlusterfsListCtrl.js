define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsListCtrl', [
			'$scope', '$state',
			function($scope, $state) {
				$scope.tabs = [
					{heading: 'Workbench', route: 'dashboardGlusterfsList.workbench', active: true},
					{heading: 'Node', route: 'dashboardGlusterfsList.node', active: false},
					{heading: 'Brick', route: 'dashboardGlusterfsList.brick', active: false},
					{heading: 'Network', route: 'dashboardGlusterfsList.network', active: false},
				];

				$scope.active = function(route) {
					return $state.is(route);
				};

				$scope.$on('$stateChangeSuccess', function() {
					$scope.tabs.forEach(function(tab) {
						tab.active = $scope.active(tab.route);
					});
				});
			}
		]);
	}
);