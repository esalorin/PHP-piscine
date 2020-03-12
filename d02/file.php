#!/usr/bin/php
<?PHP

$fd = fopen("test.php", "r");

while ($tab = fgetcsv($fd, 0, "="))
{
	print_r($tab);
}

fclose($fd);

//foreach ($tab as $el)
//{
//	echo "$el";
//}

?>