define(['./implement', './module', '../app-config'],
	function(implement, services, appConfig) {
		'use strict';

		services.factory('NagiosFactory', function($http) {
			return {
				restart: function() {
					var url = appConfig.getConfiguration().nagioscgi;
					var params = {
						'cmd_typ': '13',
						'cmd_mod': '2'
					}
					return implement.httpServiceImpl($http, 'POST', params, url);
				}
			}
		});
	}
);