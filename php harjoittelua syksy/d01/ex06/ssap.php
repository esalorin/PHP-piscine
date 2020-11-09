#!/usr/bin/php
<?php

if ($argc >  1)
{
	$i = 0;
	array_shift($argv);
	while ($argv[$i])
	{
		$trimmed = trim($argv[$i], " ");
		$str = preg_replace('/\s+/', ' ', $trimmed);
		if (str_word_count($str,0) > 1)
			$a = explode(" ", $str);
		else
			$a = array($str);
		if ($i == 0)
			$array  = $a;
		else
			$array = array_merge($array, $a);
		$i++;
	}
	sort($array);
	$list = implode("\n", $array);
	echo $list."\n";
}

?>