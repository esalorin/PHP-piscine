#!/usr/bin/php
<?PHP

//$nb = preg_match("/[0-3][0-9]?/", "299");
$d = "15";

if (!is_numeric($d) || (strlen($d) != 1 && strlen($d) != 2))
	echo "ok";

echo "$nb\n";

?>