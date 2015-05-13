define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('StatusClusterFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/status/clusters';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);