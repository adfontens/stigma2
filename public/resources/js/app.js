define(['angular', './controllers/index', './directives/index', './services/index', 'ngDraggable', 'ui.bootstrap', 'ui.bootstrap.tpls', 'ui.router'], //'./filters/index', 
	function(angular) {
		'use strict';

		return angular.module('app', [
			'app.controllers',
			'app.directives',
			// 'app.filters',
			'app.services',
			'ngDraggable',
			'ui.bootstrap',
			'ui.bootstrap.tpls',
			'ui.router'
		]);
	}
);