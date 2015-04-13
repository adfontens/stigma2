<?php

	$config;

	$config["NAGIOS_ROOT_DIR"] = "/etc/nagios/";
	$config["NAGIOS_OBJECTS_DIR"] = $config["NAGIOS_ROOT_DIR"]."objects/";
	$config["NAGIOS_COMMANDS_CFG"] = "test_commands.cfg";
	$config["NAGIOS_HOSTS_CFG"] = "test_hosts.cfg";
	$config["NAGIOS_HOSTGROUPS_CFG"] = "test_hostgroups.cfg";
	$config["NAGIOS_SERVICES_CFG"] = "test_services.cfg";
	$config["NAGIOS_SERVICEGROUPS_CFG"] = "test_servicegroups.cfg";
	$config["NAGIOS_TIMEPERIODS_CFG"] = "test_timeperiods.cfg";

	$config["NAGIOS_DEFINE_COMMAND"] = "define command";
	$config["NAGIOS_DEFINE_HOST"] = "define host";
	$config["NAGIOS_DEFINE_HOSTGROUP"] = "define hostgroup";
	$config["NAGIOS_DEFINE_SERVICE"] = "define service";
	$config["NAGIOS_DEFINE_SERVICEGROUP"] = "define servicegroup";
	$config["NAGIOS_DEFINE_TIMEPERIOD"] = "define timeperiod";

	$config["NAGIOS_STATUS_DAT"] = "/var/log/nagios/status.dat";
	$config["NAGIOS_STATUS_HOST"] = "hoststatus";
	$config["NAGIOS_STATUS_SERVICE"] = "servicestatus";

	$config["OVERVIEW_HOSTS_STATUS"] = "Hosts Up\/Down\/Unreach";
	$config["OVERVIEW_HOSTS_STATUS_POS"] = "Hosts Up/Down/Unreach";
	$config["OVERVIEW_SERVICES_STATUS"] = "Services Ok\/Warn\/Unk\/Crit";
	$config["OVERVIEW_SERVICES_STATUS_POS"] = "Services Ok/Warn/Unk/Crit";
	$config["OVERVIEW_TOTAL_HOSTS"] = "Total Hosts";
	$config["OVERVIEW_TOTAL_SERVICES"] = "Total Services";
	$config["OVERVIEW_HOSTS_CHECKED"] = "Hosts Checked";
	$config["OVERVIEW_SERVICES_CHECKED"] = "Services Checked";

	$GLOBALS["config"] = $config;

?>