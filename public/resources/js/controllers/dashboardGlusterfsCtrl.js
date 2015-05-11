define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsCtrl', [
			'$scope', '$state',
			function($scope, $state) {
				$scope.tabs = [
					{heading: 'Workbench', route: 'dashboardGlusterfs.workbench', active: true},
					{heading: 'Node', route: 'dashboardGlusterfs.node', active: false},
					{heading: 'Brick', route: 'dashboardGlusterfs.brick', active: false},
					{heading: 'Network', route: 'dashboardGlusterfs.network', active: false},
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