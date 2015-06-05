require.config({
	baseUrl: 'resources/js',
	paths: {
		'highcharts': '../lib/highcharts/highcharts',
		'highcharts-more': '../lib/highcharts/highcharts-more',
		'solid-gauge': '../lib/highcharts/solid-gauge',
		'ui.router': '../lib/angular/angular-ui-router.min',
		'ui.bootstrap': '../lib/angular/ui-bootstrap-0.12.1.min',
		'ui.bootstrap.tpls': '../lib/angular/ui-bootstrap-tpls-0.12.1.min',
		'ngDraggable': '../lib/angular/ngDraggable',
		'jquery': '../lib/jquery/jquery-1.11.2.min',
		'domReady': '../lib/require/domReady',
		'angular': '../lib/angular/angular.min'
	},
	shim: {
		'angular': {
			deps: ['jquery'],
			exports: 'angular'
		},
		'ngDraggable': {
			deps: ['angular']
		},
		'ui.bootstrap': {
			deps: ['angular']
		},
		'ui.bootstrap.tpls': {
			deps: ['angular']
		},
		'ui.router': {
			deps: ['angular']
		},
		'highcharts': {
			deps: ['jquery']
		},
		'highcharts-more': {
			deps: ['jquery', 'highcharts']
		},
		'solid-gauge': {
			deps: ['jquery', 'highcharts']
		}
	}
});

define(['require', 'angular', 'app', 'routes'],
	function(require, angular) {
		'use strict';

		require(['domReady!'], function(document) {
			angular.bootstrap(document, ['app']);
		});
	}
);