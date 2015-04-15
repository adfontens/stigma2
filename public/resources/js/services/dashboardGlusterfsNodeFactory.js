define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('DashboardGlusterfsNodeFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/glusterfs/node';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);