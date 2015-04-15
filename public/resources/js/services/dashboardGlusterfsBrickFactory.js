define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('DashboardGlusterfsBrickFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/glusterfs/brick';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);