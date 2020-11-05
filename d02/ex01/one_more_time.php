#!/usr/bin/php
<?PHP

$days = array("Lundi", "Mardi", "Mercedi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$enmon = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

if ($argc > 1)
{
	$date_array = explode(' ', $argv[1]);
	if (count($date_array) != 5)
	{
		echo "Wrong Format\n";
		exit(1);
	
	}
	if (array_search(ucfirst($date_array[0]), $days) === FALSE)
	{
		echo "Wrong Format\n";
		exit(1);
	}
	if (($index = array_search(ucfirst($date_array[2]), $months)) === FALSE)
	{
		echo "Wrong Format\n";
		exit(1);
	}
	$month = $enmon[$index];
	if (($sec = strtotime($date_array[1].$month.$date_array[3].$date_array[4])) === FALSE)
	{
		echo "Wrong Format\n";
		exit(1);
	}
	$sec = $sec - 3600;
	echo "$sec\n";
}

?>
