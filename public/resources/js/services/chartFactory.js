define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('ChartFactory', function($http) {
			return {
				getNodeSpeed: function() {
					var url = appConfig.getConfiguration().home + '/api/status/nodes/speed';
					return implement.httpGetServiceImpl($http, url);
				},
				getNodeRpm: function() {
					var url = appConfig.getConfiguration().home + '/api/status/nodes/rpm';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);