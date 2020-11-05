<?php

function ft_split($string)
{
	$trimmed = preg_replace('/\s+/', ' ', $string);
	$array = explode(" ", $trimmed);
	sort($array);
	return $array;
}

?>