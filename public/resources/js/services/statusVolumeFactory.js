define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('StatusVolumeFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/status/volumes';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);