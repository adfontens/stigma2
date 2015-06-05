define(['./module', 'highcharts-more', 'solid-gauge'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusNodeShowCtrl', [
			'$scope', '$state', 'StatusNodeFactory',
			function($scope, $state, StatusNodeFactory) {
				StatusNodeFactory.show($state.params.id)
					.then(function(data) {
						$scope.node = data;
					});
			}
		]);
	}
);