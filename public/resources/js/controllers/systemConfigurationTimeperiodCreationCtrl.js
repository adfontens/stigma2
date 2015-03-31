define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('SystemConfigurationTimeperiodCreationCtrl', [
			'$compile', '$scope', '$state', 'DirectiveTimeperiodFactory', 'NagiosFactory', 'SystemConfigurationTimeperiodFactory',
			function($compile, $scope, $state, DirectiveTimeperiodFactory, NagiosFactory, SystemConfigurationTimeperiodFactory) {
				$scope.count = 0;
				$scope.timeperiodData = {};

				$scope.addRow = function() {
					$scope.count++;
					var content = $compile('<x-timeperiod-add-row count="' + $scope.count + '"></x-timeperiod-add-row>')($scope);
					$('tbody').append(content);
				};

				$scope.cancel = function() {
					$state.go('systemConfigurationTimeperiodList');
				};

				$scope.saveTimeperiod = function() {
					var timeperiods = DirectiveTimeperiodFactory.getTimeperiods();
					var params = jQuery.extend({}, timeperiods, $scope.timeperiodData);

					SystemConfigurationTimeperiodFactory.save(params)
						.success(function(data) {
							NagiosFactory.restart();
							$state.go('systemConfigurationTimeperiodList');
						})
						.error(function(data) {
							console.log(data);
						});
				};
			}
		]);
	}
);