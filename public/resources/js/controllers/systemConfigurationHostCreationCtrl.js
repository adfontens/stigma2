define(['./module', './ngDraggableCtrl'],
	function(controllers, draggable) {
		'use strict';

		controllers.controller('SystemConfigurationHostCreationCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationHostFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationHostFactory) {
				draggable.setScope($scope);
				draggable.init();
				$scope.hostData = {};

				$scope.saveHost = function() {
					var params = {};

					for (var i in $scope.hostData) {
						params[i] = $scope.hostData[i];
					}

					SystemConfigurationHostFactory.save(params)
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

				SystemConfigurationHostFactory.create()
					.then(function(data) {
						$scope.use = data.use;
						$scope.disuse = data.disuse;
					});
			}
		]);
	}
);