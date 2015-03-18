define([], function() {
	const CONTEXT_ROOT = '/stigma2';
	const PARTIALS_ROOT = CONTEXT_ROOT + '/resources/partials/';
	const NAGIOS_CGI_BIN = '/nagios/cgi-bin//cmd.cgi';

	var configuration = {
		home: CONTEXT_ROOT,
		partial: PARTIALS_ROOT,
		nagioscgi: NAGIOS_CGI_BIN,
		route: [
			{'state': 'otherwise', 'url': CONTEXT_ROOT, 'templateUrl': PARTIALS_ROOT + 'home.php', 'controller': 'HomeCtrl'},
			{'state': 'home', 'url': CONTEXT_ROOT, 'templateUrl': PARTIALS_ROOT + 'home.php', 'controller': 'HomeCtrl'},
			{'state': 'dashboardOverviewList', 'url': CONTEXT_ROOT + '/overview', 'templateUrl': PARTIALS_ROOT + 'dashboard.overview.index.php', 'controller': 'DashboardOverviewListCtrl'},
			{'state': 'hostList', 'url': CONTEXT_ROOT + '/hosts?:type', 'templateUrl': PARTIALS_ROOT + 'host.index.php', 'controller': 'HostListCtrl'},
			{'state': 'hostShow', 'url': CONTEXT_ROOT + '/hosts/:uuid', 'templateUrl': PARTIALS_ROOT + 'host.show.php', 'controller': 'HostShowCtrl'},
			{'state': 'serviceList', 'url': CONTEXT_ROOT + '/services?:type', 'templateUrl': PARTIALS_ROOT + 'service.index.php', 'controller': 'ServiceListCtrl'},
			{'state': 'serviceShow', 'url': CONTEXT_ROOT + '/services/:uuid', 'templateUrl': PARTIALS_ROOT + 'service.show.php', 'controller': 'ServiceShowCtrl'},
			{'state': 'reportGraph', 'url': CONTEXT_ROOT + '/graph', 'templateUrl': PARTIALS_ROOT + 'report.graph.php', 'controller': ''},
			{'state': 'reportLogList', 'url': CONTEXT_ROOT + '/log', 'templateUrl': PARTIALS_ROOT + 'report.log.index.php', 'controller': 'ReportLogListCtrl'},
			{'state': 'systemConfigurationList', 'url': CONTEXT_ROOT + '/configuration', 'templateUrl': PARTIALS_ROOT + 'system.configuration.index.php', 'controller': 'SystemConfigurationListCtrl'},
			{'state': 'systemConfigurationCommandList', 'url': CONTEXT_ROOT + '/configuration/commands', 'templateUrl': PARTIALS_ROOT + 'system.configuration.command.index.php', 'controller': 'SystemConfigurationCommandListCtrl'},
			{'state': 'systemConfigurationCommandCreation', 'url': CONTEXT_ROOT + '/configuration/commands/create', 'templateUrl': PARTIALS_ROOT + 'system.configuration.command.create.php', 'controller': 'SystemConfigurationCommandCreationCtrl'},
			{'state': 'systemConfigurationCommandEdit', 'url': CONTEXT_ROOT + '/configuration/commands/:id/edit', 'templateUrl': PARTIALS_ROOT + 'system.configuration.command.edit.php', 'controller': 'SystemConfigurationCommandEditCtrl'},
			{'state': 'systemConfigurationHostList', 'url': CONTEXT_ROOT + '/configuration/hosts', 'templateUrl': PARTIALS_ROOT + 'system.configuration.host.index.php', 'controller': 'SystemConfigurationHostListCtrl'},
			{'state': 'systemConfigurationHostCreation', 'url': CONTEXT_ROOT + '/configuration/hosts/create', 'templateUrl': PARTIALS_ROOT + 'system.configuration.host.create.php', 'controller': 'SystemConfigurationHostCreationCtrl'},
			{'state': 'systemConfigurationHostEdit', 'url': CONTEXT_ROOT + '/configuration/hosts/:id/edit', 'templateUrl': PARTIALS_ROOT + 'system.configuration.host.edit.php', 'controller': 'SystemConfigurationHostEditCtrl'},
			{'state': 'systemConfigurationServiceList', 'url': CONTEXT_ROOT + '/configuration/services', 'templateUrl': PARTIALS_ROOT + 'system.configuration.service.index.php', 'controller': 'SystemConfigurationServiceListCtrl'},
			{'state': 'systemConfigurationServiceCreation', 'url': CONTEXT_ROOT + '/configuration/services/create', 'templateUrl': PARTIALS_ROOT + 'system.configuration.service.create.php', 'controller': 'SystemConfigurationServiceCreationCtrl'},
			{'state': 'systemConfigurationServiceEdit', 'url': CONTEXT_ROOT + '/configuration/services/:id/edit', 'templateUrl': PARTIALS_ROOT + 'system.configuration.service.edit.php', 'controller': 'SystemConfigurationServiceEditCtrl'},
			{'state': 'systemConfigurationTimeperiodList', 'url': CONTEXT_ROOT + '/configuration/timeperiods', 'templateUrl': PARTIALS_ROOT + 'system.configuration.timeperiod.index.php', 'controller': 'SystemConfigurationTimeperiodListCtrl'},
			{'state': 'systemConfigurationTimeperiodCreation', 'url': CONTEXT_ROOT + '/configuration/timeperiods/create', 'templateUrl': PARTIALS_ROOT + 'system.configuration.timeperiod.create.php', 'controller': 'SystemConfigurationTimeperiodCreationCtrl'},
			{'state': 'systemConfigurationTimeperiodEdit', 'url': CONTEXT_ROOT + '/configuration/timeperiods/:id/edit', 'templateUrl': PARTIALS_ROOT + 'system.configuration.timeperiod.edit.php', 'controller': 'SystemConfigurationTimeperiodEditCtrl'},
		],
		periods: [
			{ 'value': '1', 'text': 'Today' },
			{ 'value': '2', 'text': 'Last 24 Hours' },
			{ 'value': '3', 'text': 'Yesterday' },
			{ 'value': '4', 'text': 'This Week' },
			{ 'value': '5', 'text': 'Last 7 Days' },
			{ 'value': '6', 'text': 'Last Week' },
			{ 'value': '7', 'text': 'This Month' },
			{ 'value': '8', 'text': 'Last 31 Days' },
			{ 'value': '9', 'text': 'Last Month' },
			{ 'value': '10', 'text': 'This Year' },
			{ 'value': '11', 'text': 'Last Year' },
			{ 'value': '12', 'text': 'Custom Period' },
		],
		timeperiod: {
			week: [
				{'value': 'sunday', 'text': 'Sunday'},
				{'value': 'monday', 'text': 'Monday'},
				{'value': 'tuesday', 'text': 'Tuesday'},
				{'value': 'wednesday', 'text': 'Wednesday'},
				{'value': 'thursday', 'text': 'Thursday'},
				{'value': 'friday', 'text': 'Friday'},
				{'value': 'saturday', 'text': 'Saturday'},
			],
			month: [
				{'value': '', 'text': '선택'},
				{'value': 'january', 'text': 'January'},
				{'value': 'february', 'text': 'February'},
				{'value': 'march', 'text': 'March'},
				{'value': 'april', 'text': 'April'},
				{'value': 'may', 'text': 'May'},
				{'value': 'june', 'text': 'June'},
				{'value': 'july', 'text': 'July'},
				{'value': 'august', 'text': 'August'},
				{'value': 'september', 'text': 'September'},
				{'value': 'october', 'text': 'October'},
				{'value': 'november', 'text': 'November'},
				{'value': 'december', 'text': 'December'},
			],
			weekday: [
				{'value': '', 'text': '선택'},
				{'value': '-1', 'text': '-1'},
				{'value': '1', 'text': '1'},
				{'value': '2', 'text': '2'},
				{'value': '3', 'text': '3'},
				{'value': '4', 'text': '4'},
				{'value': '5', 'text': '5'},
			],
			day: [
				{'value': '', 'text': '선택'},
				{'value': '1', 'text': '1'},
				{'value': '2', 'text': '2'},
				{'value': '3', 'text': '3'},
				{'value': '4', 'text': '4'},
				{'value': '5', 'text': '5'},
				{'value': '6', 'text': '6'},
				{'value': '7', 'text': '7'},
				{'value': '8', 'text': '8'},
				{'value': '9', 'text': '9'},
				{'value': '10', 'text': '10'},
				{'value': '11', 'text': '11'},
				{'value': '12', 'text': '12'},
				{'value': '13', 'text': '13'},
				{'value': '14', 'text': '14'},
				{'value': '15', 'text': '15'},
				{'value': '16', 'text': '16'},
				{'value': '17', 'text': '17'},
				{'value': '18', 'text': '18'},
				{'value': '19', 'text': '19'},
				{'value': '20', 'text': '20'},
				{'value': '21', 'text': '21'},
				{'value': '22', 'text': '22'},
				{'value': '23', 'text': '23'},
				{'value': '24', 'text': '24'},
				{'value': '25', 'text': '25'},
				{'value': '26', 'text': '26'},
				{'value': '27', 'text': '27'},
				{'value': '28', 'text': '28'},
				{'value': '29', 'text': '29'},
				{'value': '30', 'text': '30'},
				{'value': '31', 'text': '31'},
			],
			hour: [
				{'value': '00', 'text': '00'},
				{'value': '01', 'text': '01'},
				{'value': '02', 'text': '02'},
				{'value': '03', 'text': '03'},
				{'value': '04', 'text': '04'},
				{'value': '05', 'text': '05'},
				{'value': '06', 'text': '06'},
				{'value': '07', 'text': '07'},
				{'value': '08', 'text': '08'},
				{'value': '09', 'text': '09'},
				{'value': '10', 'text': '10'},
				{'value': '11', 'text': '11'},
				{'value': '12', 'text': '12'},
				{'value': '13', 'text': '13'},
				{'value': '14', 'text': '14'},
				{'value': '15', 'text': '15'},
				{'value': '16', 'text': '16'},
				{'value': '17', 'text': '17'},
				{'value': '18', 'text': '18'},
				{'value': '19', 'text': '19'},
				{'value': '20', 'text': '20'},
				{'value': '21', 'text': '21'},
				{'value': '22', 'text': '22'},
				{'value': '23', 'text': '23'},
				{'value': '24', 'text': '24'},
			],
			minite: [
				{'value': '00', 'text': '00'},
				{'value': '01', 'text': '01'},
				{'value': '02', 'text': '02'},
				{'value': '03', 'text': '03'},
				{'value': '04', 'text': '04'},
				{'value': '05', 'text': '05'},
				{'value': '06', 'text': '06'},
				{'value': '07', 'text': '07'},
				{'value': '08', 'text': '08'},
				{'value': '09', 'text': '09'},
				{'value': '10', 'text': '10'},
				{'value': '11', 'text': '11'},
				{'value': '12', 'text': '12'},
				{'value': '13', 'text': '13'},
				{'value': '14', 'text': '14'},
				{'value': '15', 'text': '15'},
				{'value': '16', 'text': '16'},
				{'value': '17', 'text': '17'},
				{'value': '18', 'text': '18'},
				{'value': '19', 'text': '19'},
				{'value': '20', 'text': '20'},
				{'value': '21', 'text': '21'},
				{'value': '22', 'text': '22'},
				{'value': '23', 'text': '23'},
				{'value': '24', 'text': '24'},
				{'value': '25', 'text': '25'},
				{'value': '26', 'text': '26'},
				{'value': '27', 'text': '27'},
				{'value': '28', 'text': '28'},
				{'value': '29', 'text': '29'},
				{'value': '30', 'text': '30'},
				{'value': '31', 'text': '31'},
				{'value': '32', 'text': '32'},
				{'value': '33', 'text': '33'},
				{'value': '34', 'text': '34'},
				{'value': '35', 'text': '35'},
				{'value': '36', 'text': '36'},
				{'value': '37', 'text': '37'},
				{'value': '38', 'text': '38'},
				{'value': '39', 'text': '39'},
				{'value': '40', 'text': '40'},
				{'value': '41', 'text': '41'},
				{'value': '42', 'text': '42'},
				{'value': '43', 'text': '43'},
				{'value': '44', 'text': '44'},
				{'value': '45', 'text': '45'},
				{'value': '46', 'text': '46'},
				{'value': '47', 'text': '47'},
				{'value': '48', 'text': '48'},
				{'value': '49', 'text': '49'},
				{'value': '50', 'text': '50'},
				{'value': '51', 'text': '51'},
				{'value': '52', 'text': '52'},
				{'value': '53', 'text': '53'},
				{'value': '54', 'text': '54'},
				{'value': '55', 'text': '55'},
				{'value': '56', 'text': '56'},
				{'value': '57', 'text': '57'},
				{'value': '58', 'text': '58'},
				{'value': '59', 'text': '59'},
			]
		}
	};

	function getConfiguration() {
		return configuration;
	};

	return {
		getConfiguration: getConfiguration
	};
});