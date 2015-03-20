define(['./module', '../app-config'],
	function(controllers, appConfig) {
		'use strict';

		controllers.controller('ServiceListCtrl', [
			'$scope', '$state', 'ServiceFactory',
			function($scope, $state, ServiceFactory) {
				$scope.formatDate = function(timestamp) {
					var formatDate = new Date(timestamp*1000);
					var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];

					var year = formatDate.getFullYear();
					var month = months[formatDate.getMonth()];
					var date = formatDate.getDate();
					var hour = formatDate.getHours();
					var min = "0" + formatDate.getMinutes();
					var sec = "0" + formatDate.getSeconds();

					var time = year + '-' + month + '-' + date + " " + hour + ':' + min.substr(min.length-2) + ':' + sec.substr(sec.length-2);
					return time;
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
					});
			}
		]);
	}
);