#!/usr/bin/php
<?PHP

function epur($str)
{
	$trimmed = trim(preg_replace('/ +/', ' ', $str));
	return $trimmed;
}

if ($argc > 1)
{
	$array = explode(' ', epur($argv[1]));
	if (count($array) > 1)
	{
		$str = implode(" ", $array);
		$s1 = strtok($str, " ");
		$s2 = strstr($str, " ");
		$space = $s2." ";
		$new = $space.$s1;
		echo epur($new)."\n";
	}
	else
		echo "$argv[1]\n";
}

?>