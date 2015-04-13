define(['./module'],
	function(controllers) {
		'use strict';

		controllers.controller('HomeCtrl', [
			'$scope',
			function($scope) {
				$scope.tabs = [
					{ title:'Nodes', content:'Node List' },
					{ title:'Bricks', content:'Brick List' },
					{ title:'Service Network', content:'Service Network Status' },
					{ title:'Backend Network', content:'Backend Network Status' }
				];
			}
		]);
	}
);