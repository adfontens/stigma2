define(['./module', '../app-util'],
	function(controllers, appUtil) {
		'use strict';

		controllers.controller('HostListCtrl', [
			'$scope', '$state', 'HostFactory',
			function($scope, $state, HostFactory) {
				$scope.formatDate = function(last_check) {
					return appUtil.formatDate(last_check);
				};

				$scope.formatDuration = function(last_state_change) {
					return appUtil.formatDuration(last_state_change);
				};
				
				$scope.detailHost = function(uuid) {
					$state.go('hostShow', {uuid: uuid});
				};

				HostFactory.list()
					.then(function(data) {
						$scope.hosts = data;
						if (typeof($state.params.type) !== "undefined" && $state.params.type !== null) {
							$scope.current_state = $state.params.type;
						}
					});
			}
		]);
	}
);