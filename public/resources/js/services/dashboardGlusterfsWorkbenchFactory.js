define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('DashboardGlusterfsWorkbenchFactory', function($http) {
			return {
				list: function() {
					var url = appConfig.getConfiguration().home + '/api/glusterfs/workbench';
					return implement.httpGetServiceImpl($http, url);
				}
			}
		});
	}
);