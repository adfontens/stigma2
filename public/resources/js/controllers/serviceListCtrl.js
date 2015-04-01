define(['./module', '../app-util'],
	function(controllers, appUtil) {
		'use strict';

		controllers.controller('ServiceListCtrl', [
			'$scope', '$state', 'ServiceFactory',
			function($scope, $state, ServiceFactory) {
				$scope.formatDate = function(last_check) {
					return appUtil.formatDate(last_check);
				};

				$scope.formatDuration = function(last_state_change) {
					return appUtil.formatDuration(last_state_change);
				};

				$scope.detailHost = function(uuid) {
					$state.go('hostShow', {uuid: uuid});
				};

				$scope.detailService = function(uuid) {
					$state.go('serviceShow', {uuid: uuid});
				};

				ServiceFactory.list($state.params)
					.then(function(data) {
						$scope.services = data;
						$scope.current_state = $state.params.current_state;
						$scope.has_been_checked = $state.params.has_been_checked;
					});
			}
		]);
	}
);