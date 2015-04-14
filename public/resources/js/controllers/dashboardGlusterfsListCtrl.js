define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('DashboardGlusterfsListCtrl', [
			'$scope',
			function($scope) {
				$scope.tabs = [
					{ title:'Storage', content:'.storage', select: 'angular.element("a").trigger("click");' },
					// { title:'Node', content:'.node' },
					// { title:'Brick', content:'.brick' },
					{ title:'Network', content:'.network' }
				];
			}
		]);
	}
);