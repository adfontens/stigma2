define(['./module', '../app-config'],
	function(controllers, appConfig) {
		'use strict';

		controllers.controller('SystemConfigurationCommandEditCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationCommandFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationCommandFactory) {
				$scope.commandData = {};

				$scope.updateCommand = function(id) {
					SystemConfigurationCommandFactory.update(id, $scope.commandData)
						.success(function(data) {
							NagiosFactory.restart();
							$state.go('systemConfigurationCommandList');
						})
						.error(function(data) {
							console.log(data);
						});
				};

				$scope.cancel = function() {
					$state.go('systemConfigurationCommandList');
				};

				SystemConfigurationCommandFactory.edit($state.params.id)
					.then(function(data) {
						$scope.commandData = data[0];
					});
			}
		]);
	}
);