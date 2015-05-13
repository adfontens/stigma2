define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusNodeListCtrl', [
			'$scope', '$state', 'StatusNodeFactory',
			function($scope, $state, StatusNodeFactory) {
				StatusNodeFactory.list()
					.then(function(data) {
						$scope.nodes = data;
					});
			}
		]);
	}
);