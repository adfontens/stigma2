define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusVolumeListCtrl', [
			'$scope', '$state', 'StatusVolumeFactory',
			function($scope, $state, StatusVolumeFactory) {
				StatusVolumeFactory.list()
					.then(function(data) {
						$scope.volumes = data;
					});
			}
		]);
	}
);