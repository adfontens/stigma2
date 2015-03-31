define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('ServiceShowCtrl', [
			'$scope', '$state', 'ServiceFactory',
			function($scope, $state, ServiceFactory) {
				$scope.cancel = function() {
					$state.go('serviceList');
				};

				ServiceFactory.show($state.params.uuid)
					.then(function(data) {
						$scope.service = data.service;
					});
			}
		]);
	}
);