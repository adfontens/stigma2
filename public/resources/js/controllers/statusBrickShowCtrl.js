define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusBrickShowCtrl', [
			'$scope', '$state', 'StatusBrickFactory',
			function($scope, $state, StatusBrickFactory) {
				StatusBrickFactory.show($state.params.id)
					.then(function(data) {
						$scope.brick = data;
					});
			}
		]);
	}
);