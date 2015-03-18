define(['./module', '../app-config', './ngDraggableCtrl'],
	function(controllers, appConfig, draggable) {
		'use strict';

		controllers.controller('SystemConfigurationHostEditCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationHostFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationHostFactory) {
				draggable.setScope($scope);
				draggable.init();

				$scope.updateHost = function() {
					var params = {};

					for (var i in $scope.hostData) {
						params[i] = $scope.hostData[i];
					}

					SystemConfigurationHostFactory.update($state.params.id, params)
						.success(function(data) {
							NagiosFactory.restart();
							$state.go('systemConfigurationHostList');
						})
						.error(function(data) {
							console.log(data);
						});
				};

				$scope.cancel = function() {
					$state.go('systemConfigurationHostList');
				};

				SystemConfigurationHostFactory.edit($state.params.id)
					.then(function(data) {
						$scope.hostData = data.hostData;
						$scope.hostDetail = data.hostDetail;
						$scope.use = data.use;
						$scope.disuse = data.disuse;
					});
			}
		]);
	}
);