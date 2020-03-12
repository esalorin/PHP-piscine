#!/usr/bin/php
<?PHP

if ($argv[1] != NULL)
{
	$trimmed = trim(preg_replace('/ +/', ' ', $argv[1]));
	echo "$trimmed\n";
}

?>