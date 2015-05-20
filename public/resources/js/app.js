define(['angular', './controllers/index', './directives/index', './filters/index', './services/index', 'highcharts', 'highcharts-more', 'solid-gauge', 'ngDraggable', 'ui.bootstrap', 'ui.bootstrap.tpls', 'ui.router'],
	function(angular) {
		'use strict';

		return angular.module('app', [
			'app.controllers',
			'app.directives',
			'app.filters',
			'app.services',
			'ngDraggable',
			'ui.bootstrap',
			'ui.bootstrap.tpls',
			'ui.router'
		]);
	}
);