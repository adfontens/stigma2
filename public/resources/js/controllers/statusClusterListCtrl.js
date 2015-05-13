define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusClusterListCtrl', [
			'$scope', '$state', 'StatusClusterFactory',
			function($scope, $state, StatusClusterFactory) {
				StatusClusterFactory.list()
					.then(function(data) {
						$scope.clusters = data;
					});
			}
		]);
	}
);