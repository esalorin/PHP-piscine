#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$str = trim(preg_replace('/[ \t]+/', ' ', $argv[1]));
	echo "$str\n";
}

?>