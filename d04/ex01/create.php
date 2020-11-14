<?php

function if_username_exists($array)
{
	foreach($array as $a)
	{
		if ($a["login"] == $_POST["login"])
			return FALSE;
	}
	return TRUE;
}

if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["passwd"])
{
	if (!file_exists("../private"))
		mkdir("../private");
	$array = array();
	$array = unserialize(file_get_contents("../private/passwd"));
	if (if_username_exists($array) == FALSE)
		echo "ERROR\n";
	else
	{
		$new = ["login" => $_POST["login"], "passwd" => hash("sha512", $_POST["passwd"])];
		$array[] = $new;
		file_put_contents("../private/passwd", serialize($array));
		echo "OK\n";
	}
}
else
	echo "ERROR\n";

?>
