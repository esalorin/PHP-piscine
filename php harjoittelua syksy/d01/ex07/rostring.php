#!/usr/bin/php
<?php

if ($argc > 1)
{
	$trimmed = trim($argv[1], " ");
	$str = preg_replace('/\s+/', ' ', $trimmed);
	$array = explode(' ', $str);
	$fisrt = array_shift($array);
	array_push($array, $fisrt);
	echo implode(" ", $array). "\n";
}

?>