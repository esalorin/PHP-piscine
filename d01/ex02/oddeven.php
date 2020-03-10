#!/usr/bin/php
<?PHP

while (1)
{
	echo "Enter a number: ";
	if (($input = fgets(STDIN)) == NULL)
		break;
	$trimmed = rtrim($input);
	if (is_numeric($trimmed))
	{
		
		if ($trimmed % 2 == 0)
			echo "The number $trimmed is even\n";
		else
			echo "The number $trimmed is odd\n";
	}
	else
		echo "'$trimmed' is not a number\n";
}
echo "\n";

?>