#!/usr/bin/php
<?PHP

$array = $argv;
$removed = array_shift($array);

foreach ($array as $elem)
	echo "$elem\n";

?>