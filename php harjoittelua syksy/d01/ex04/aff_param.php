#!/usr/bin/php
<?php

if ($argc > 1)
{
	array_shift($argv);
	$list = implode("\n", $argv);
	echo $list."\n";
}

?>