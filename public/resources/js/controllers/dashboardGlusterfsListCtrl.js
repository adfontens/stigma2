define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsListCtrl', [
			'$scope',
			function($scope) {
				$scope.trigger = function(name) {
					angular.element('a[name="' + name + '"]').trigger('click');
				};
			}
		]);
	}
);