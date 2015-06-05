define(['./module'],
	function(filters) {
		'use strict';

		filters.filter('sumOfBricksStatus', function() {
			return function (bricks, status) {
				if (typeof (bricks) === 'undefined' && typeof (status) === 'undefined') {
					return 0;
				}

				var result = 0;
				for (var i = 0; i < bricks.length; i++) {
					var brick = bricks[i];
					if (brick['status'] === status) result++;
				}
				return result;
			}
		});
	}
);