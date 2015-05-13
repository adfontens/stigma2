define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('StatusBrickFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/status/bricks';
					return implement.httpGetServiceImpl($http, url);
				},
				show: function(id) {
					var url = appConfig.getConfiguration().home + '/api/status/bricks/' + id;
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);