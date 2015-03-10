<?php
class NagiosStatus {
	public function read($filename = null)
	{
		if (file_exists($filename)) {
			$lines = file($filename, FILE_IGNORE_NEW_LINES);
			$objects = array();
			$object;

			foreach ($lines as $line) {
				$line = trim($line);
				$first = substr($line, 0, 1);

				if (strcmp($first, "") === 0 || strcmp($first, "#") === 0) continue;
				if (strpos($line, "{")) {
					$object = array();
					$exploded = explode(" ", $line);
					$type = substr($exploded[0], 0);
					$object['type'] = $type;
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
				$object['prop'][$key] = $value;
			}

			return $objects;
		}
	}
}