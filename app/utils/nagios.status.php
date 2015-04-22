<?php
class NagiosStatus {
	public function read($filename, $status)
	{
		$command = "awk '/".$status."/,/}/' ".$filename;
		$awk = shell_exec($command);

		$lines = explode(PHP_EOL, $awk);
		$objects = array();
		$object;

		foreach ($lines as $line) {
			$line = trim($line);
			$first = substr($line, 0, 1);

			if (strcmp($first, "") === 0 || strcmp($first, "#") === 0) continue;
			if (strpos($line, "{")) {
				$object = array();
				continue;
			}
			if (strcmp($first, "}") === 0) {
				array_push($objects, $object);
				continue;
			}

			$parts = preg_split('/=/', $line);
			$key = $parts[0];
			$value = "";
			$delimiter = "";
			for ($i = 1, $size = sizeof($parts); $i < $size; $i++) {
				$value .= $delimiter.$parts[$i];
				$delimiter = " = ";
			}
			$object[$key] = $value;
		}

		return $objects;
	}
}