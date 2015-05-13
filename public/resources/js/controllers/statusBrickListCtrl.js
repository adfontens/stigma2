define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusBrickListCtrl', [
			'$scope', '$state', 'StatusBrickFactory',
			function($scope, $state, StatusBrickFactory) {
				StatusBrickFactory.list()
					.then(function(data) {
						$scope.bricks = data;
					});
			}
		]);
	}
);