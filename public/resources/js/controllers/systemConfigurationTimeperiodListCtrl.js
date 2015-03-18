define(['./module', '../app-config'],
	function(controllers, appConfig) {
		'use strict';

		controllers.controller('SystemConfigurationTimeperiodListCtrl', [
			'$scope', '$state', 'NagiosFactory', 'SystemConfigurationTimeperiodFactory',
			function($scope, $state, NagiosFactory, SystemConfigurationTimeperiodFactory) {
				$scope.createTimeperiod = function() {
					$state.go('systemConfigurationTimeperiodCreation');
				};

				$scope.editTimeperiod = function(id) {
					$state.go('systemConfigurationTimeperiodEdit', {id: id});
				};

				$scope.deleteTimeperiod = function(id) {
					SystemConfigurationTimeperiodFactory.remove(id)
						.success(function(data) {
							NagiosFactory.restart();
							SystemConfigurationTimeperiodFactory.list()
								.then(function(timeperiods) {
									$scope.timeperiods = timeperiods;
								});
						});
				};

				SystemConfigurationTimeperiodFactory.list()
					.then(function(data) {
						$scope.timeperiods = data;
					});
			}
		]);
	}
);