define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('StatusNodeListCtrl', [
			'$scope', '$state', 'StatusNodeFactory',
			function($scope, $state, StatusNodeFactory) {
				$scope.detailNode = function(id) {
					$state.go('statusNodeDetail', {id: '1'});
					// $state.go('statusNodeDetail', {id: id});
				};

				StatusNodeFactory.list()
					.then(function(data) {
						$scope.nodes = data;
					});
			}
		]);
	}
);