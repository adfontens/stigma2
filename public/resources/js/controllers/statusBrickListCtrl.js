define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusBrickListCtrl', [
			'$scope', '$state', 'StatusBrickFactory',
			function($scope, $state, StatusBrickFactory) {
				$scope.detailBrick = function(id) {
					$state.go('statusBrickDetail', {id: '1'});
					// $state.go('statusBrickDetail', {id: id});
				};

				StatusBrickFactory.list()
					.then(function(data) {
						$scope.bricks = data;
					});
			}
		]);
	}
);