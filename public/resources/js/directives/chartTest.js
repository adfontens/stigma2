define(['./module', '../app-config'],
	function(directives, appConfig) {
		'use strict';

		var setDarkTheme = function() {
			/**
			 * Dark theme for Highcharts JS
			 * @author Torstein Honsi
			 */

			// Load the fonts
			Highcharts.createElement('link', {
			   href: '//fonts.googleapis.com/css?family=Unica+One',
			   rel: 'stylesheet',
			   type: 'text/css'
			}, null, document.getElementsByTagName('head')[0]);

			Highcharts.theme = {
			   colors: ["#2b908f", "#90ee7e", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
			      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
			   chart: {
			      backgroundColor: {
			         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
			         stops: [
			            [0, '#2a2a2b'],
			            [1, '#3e3e40']
			         ]
			      },
			      style: {
			         fontFamily: "'Unica One', sans-serif"
			      },
			      plotBorderColor: '#606063'
			   },
			   title: {
			      style: {
			         color: '#E0E0E3',
			         textTransform: 'uppercase',
			         fontSize: '20px'
			      }
			   },
			   subtitle: {
			      style: {
			         color: '#E0E0E3',
			         textTransform: 'uppercase'
			      }
			   },
			   xAxis: {
			      gridLineColor: '#707073',
			      labels: {
			         style: {
			            color: '#E0E0E3'
			         }
			      },
			      lineColor: '#707073',
			      minorGridLineColor: '#505053',
			      tickColor: '#707073',
			      title: {
			         style: {
			            color: '#A0A0A3'

			         }
			      }
			   },
			   yAxis: {
			      gridLineColor: '#707073',
			      labels: {
			         style: {
			            color: '#E0E0E3'
			         }
			      },
			      lineColor: '#707073',
			      minorGridLineColor: '#505053',
			      tickColor: '#707073',
			      tickWidth: 1,
			      title: {
			         style: {
			            color: '#A0A0A3'
			         }
			      }
			   },
			   tooltip: {
			      backgroundColor: 'rgba(0, 0, 0, 0.85)',
			      style: {
			         color: '#F0F0F0'
			      }
			   },
			   plotOptions: {
			      series: {
			         dataLabels: {
			            color: '#B0B0B3'
			         },
			         marker: {
			            lineColor: '#333'
			         }
			      },
			      boxplot: {
			         fillColor: '#505053'
			      },
			      candlestick: {
			         lineColor: 'white'
			      },
			      errorbar: {
			         color: 'white'
			      }
			   },
			   legend: {
			      itemStyle: {
			         color: '#E0E0E3'
			      },
			      itemHoverStyle: {
			         color: '#FFF'
			      },
			      itemHiddenStyle: {
			         color: '#606063'
			      }
			   },
			   credits: {
			      style: {
			         color: '#666'
			      }
			   },
			   labels: {
			      style: {
			         color: '#707073'
			      }
			   },

			   drilldown: {
			      activeAxisLabelStyle: {
			         color: '#F0F0F3'
			      },
			      activeDataLabelStyle: {
			         color: '#F0F0F3'
			      }
			   },

			   navigation: {
			      buttonOptions: {
			         symbolStroke: '#DDDDDD',
			         theme: {
			            fill: '#505053'
			         }
			      }
			   },

			   // scroll charts
			   rangeSelector: {
			      buttonTheme: {
			         fill: '#505053',
			         stroke: '#000000',
			         style: {
			            color: '#CCC'
			         },
			         states: {
			            hover: {
			               fill: '#707073',
			               stroke: '#000000',
			               style: {
			                  color: 'white'
			               }
			            },
			            select: {
			               fill: '#000003',
			               stroke: '#000000',
			               style: {
			                  color: 'white'
			               }
			            }
			         }
			      },
			      inputBoxBorderColor: '#505053',
			      inputStyle: {
			         backgroundColor: '#333',
			         color: 'silver'
			      },
			      labelStyle: {
			         color: 'silver'
			      }
			   },

			   navigator: {
			      handles: {
			         backgroundColor: '#666',
			         borderColor: '#AAA'
			      },
			      outlineColor: '#CCC',
			      maskFill: 'rgba(255,255,255,0.1)',
			      series: {
			         color: '#7798BF',
			         lineColor: '#A6C7ED'
			      },
			      xAxis: {
			         gridLineColor: '#505053'
			      }
			   },

			   scrollbar: {
			      barBackgroundColor: '#808083',
			      barBorderColor: '#808083',
			      buttonArrowColor: '#CCC',
			      buttonBackgroundColor: '#606063',
			      buttonBorderColor: '#606063',
			      rifleColor: '#FFF',
			      trackBackgroundColor: '#404043',
			      trackBorderColor: '#404043'
			   },

			   // special colors for some of the
			   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
			   background2: '#505053',
			   dataLabelsColor: '#B0B0B3',
			   textColor: '#C0C0C0',
			   contrastTextColor: '#F0F0F3',
			   maskColor: 'rgba(255,255,255,0.3)'
			};

			// Apply the theme
			Highcharts.setOptions(Highcharts.theme);
		};

		var setDefaultOptions = function() {
			var gaugeOptions = {
				chart: {
				    type: 'solidgauge'
				},

				title: null,

				pane: {
				    center: ['50%', '85%'],
				    size: '140%',
				    startAngle: -90,
				    endAngle: 90,
				    background: {
				        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
				        innerRadius: '60%',
				        outerRadius: '100%',
				        shape: 'arc'
				    }
				},

				tooltip: {
				    enabled: false
				},

				// the value axis
				yAxis: {
				    stops: [
				        [0.1, '#55BF3B'], // green
				        [0.5, '#DDDF0D'], // yellow
				        [0.9, '#DF5353'] // red
				    ],
				    lineWidth: 0,
				    minorTickInterval: null,
				    tickPixelInterval: 400,
				    tickWidth: 0,
				    title: {
				        y: -70
				    },
				    labels: {
				        y: 16
				    }
				},

				plotOptions: {
				    solidgauge: {
				        dataLabels: {
				            y: 5,
				            borderWidth: 0,
				            useHTML: true
				        }
				    }
				}
			};

			return gaugeOptions;
		};

		directives.directive('chartTest', [
			'ChartFactory',
			function(ChartFactory) {
				function build(gaugeOptions) {
					// The speed gauge
					$('#container-speed').highcharts(Highcharts.merge(gaugeOptions, {
					    yAxis: {
					        min: 0,
					        max: 200,
					        title: {
					            text: 'Speed'
					        }
					    },

					    credits: {
					        enabled: false
					    },

					    series: [{
					        name: 'Speed',
					        data: [80],
					        dataLabels: {
					            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
					                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
					                   '<span style="font-size:12px;color:silver">km/h</span></div>'
					        },
					        tooltip: {
					            valueSuffix: ' km/h'
					        }
					    }]

					}));
				}

				function setChartData(data) {
					// Speed
					var chart = $('#container-speed').highcharts(),
					    point,
					    inc;

					if (chart) {
					    point = chart.series[0].points[0];
					    inc = data.speed;

					    point.update(inc);
					}
				}

				return {
					restrict: 'E',
					replace: true,
					scope: true,
					templateUrl: appConfig.getConfiguration().partial + 'status.chart_speed_directive.php',
					link: function (scope, element, attrs) {
						$(function () {
							setDarkTheme();

							var gaugeOptions = setDefaultOptions();

							build(gaugeOptions);

							// Bring life to the dials
							setInterval(function () {
							    ChartFactory.getNodeSpeed()
							    	.then(function(data) {
							    		setChartData(data);
							    	});
							}, 5000);


						});
					}
				};
			}
		]);


		directives.directive('chartTester', [
			'ChartFactory',
			function(ChartFactory) {
				function build(gaugeOptions) {
					// The RPM gauge
					$('#container-rpm').highcharts(Highcharts.merge(gaugeOptions, {
					    yAxis: {
					        min: 0,
					        max: 5,
					        title: {
					            text: 'RPM'
					        }
					    },

					    credits: {
					        enabled: false
					    },

					    series: [{
					        name: 'RPM',
					        data: [1],
					        dataLabels: {
					            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
					                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
					                   '<span style="font-size:12px;color:silver">* 1000 / min</span></div>'
					        },
					        tooltip: {
					            valueSuffix: ' revolutions/min'
					        }
					    }]

					}));
				}

				function setChartData(data) {
					// RPM
					var chart = $('#container-rpm').highcharts(),
					    point,
					    inc;

					if (chart) {
					    point = chart.series[0].points[0];
					    inc = data.rpm;

					    point.update(inc);
					}
				}

				return {
					restrict: 'E',
					replace: true,
					scope: true,
					templateUrl: appConfig.getConfiguration().partial + 'status.chart_rpm_directive.php',
					link: function (scope, element, attrs) {
						$(function () {
							setDarkTheme();

							var gaugeOptions = setDefaultOptions();

							build(gaugeOptions);

							// Bring life to the dials
							setInterval(function () {
							    ChartFactory.getNodeRpm()
							    	.then(function(data) {
							    		setChartData(data);
							    	});
							}, 5000);


						});
					}
				};
			}
		]);
	}
);