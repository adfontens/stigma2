define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('SystemConfigurationHostgroupListCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationHostgroupFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationHostgroupFactory) {
				$scope.createHostgroup = function() {
					$state.go('systemConfigurationHostgroupCreation');
				};

				// $scope.editHost = function(id) {
				// 	$state.go('systemConfigurationHostEdit', {id: id});
				// };

				// $scope.deleteHost = function(id) {
				// 	SystemConfigurationHostFactory.remove(id)
				// 		.success(function(data) {
				// 			NagiosFactory.restart();
				// 			SystemConfigurationHostFactory.list()
				// 				.then(function(hosts) {
				// 					$scope.hosts = hosts;
				// 				});
				// 		});
				// };

				SystemConfigurationHostgroupFactory.list($state.params)
					.then(function(data) {
						$scope.hosts = data;
					});
			}
		]);
	}
);