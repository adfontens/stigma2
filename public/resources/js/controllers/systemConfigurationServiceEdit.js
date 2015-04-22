define(['./module', './ngDraggableCtrl'],
	function(controllers, draggable) {
		'use strict';

		controllers.controller('SystemConfigurationServiceEditCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationServiceFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationServiceFactory) {
				draggable.setScope($scope);
				draggable.init();

				$scope.updateService = function() {
					var params = {};

					for (var i in $scope.serviceData) {
						params[i] = $scope.serviceData[i];
					}

					SystemConfigurationServiceFactory.update($state.params.id, params)
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

				SystemConfigurationServiceFactory.edit($state.params.id)
					.then(function(data) {
						$scope.serviceData = data.serviceData;
						$scope.serviceDetail = data.serviceDetail;
						$scope.use = data.use;
						$scope.nonuse = data.nonuse;
					});
			}
		]);
	}
);