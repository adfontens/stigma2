define(['./module', './ngDraggableCtrl'],
	function(controllers, draggable) {
		'use strict';

		controllers.controller('SystemConfigurationHostgroupCreationCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationHostgroupFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationHostgroupFactory) {
				draggable.setScope($scope);
				draggable.init();
				$scope.hostgroupData = {};

				$scope.saveHostgroup = function() {
					var params = {};

					for (var i in $scope.hostgroupData) {
						params[i] = $scope.hostgroupData[i];
					}

					params["members"] = $scope.use;

					SystemConfigurationHostgroupFactory.save(params)
						.success(function(data) {
							NagiosFactory.restart();
							$state.go('systemConfigurationHostgroupList');
						})
						.error(function(data) {
							console.log(data);
						});
				};

				$scope.cancel = function() {
					$state.go('systemConfigurationHostgroupList');
				};

				SystemConfigurationHostgroupFactory.create()
					.then(function(data) {
						$scope.use = data.use;
						$scope.nonuse = data.nonuse;
					});
			}
		]);
	}
);