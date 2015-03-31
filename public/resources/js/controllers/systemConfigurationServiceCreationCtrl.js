define(['./module', './ngDraggableCtrl'],
	function(controllers, draggable) {
		'use strict';

		controllers.controller('SystemConfigurationServiceCreationCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationServiceFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationServiceFactory) {
				draggable.setScope($scope);
				draggable.init();
				$scope.serviceData = {};

				$scope.saveService = function() {
					var params = {};

					for (var i in $scope.serviceData) {
						params[i] = $scope.serviceData[i];
					}

					SystemConfigurationServiceFactory.save(params)
						.success(function(data) {
							NagiosFactory.restart();
							$state.go('systemConfigurationServiceList');
						})
						.error(function(data) {
							console.log(data);
						});
				};

				$scope.cancel = function() {
					$state.go('systemConfigurationServiceList');
				};

				SystemConfigurationServiceFactory.create()
					.then(function(data) {
						$scope.use = data.use;
						$scope.disuse = data.disuse;
					});
			}
		]);
	}
);