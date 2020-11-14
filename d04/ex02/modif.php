<?php

function if_username_exists($array)
{
	foreach($array as &$a)
	{
		if ($a["login"] == $_POST["login"] && $a["passwd"] == hash("sha512", $_POST["oldpw"]))
		{
			$a["passwd"] = hash("sha512", $_POST["newpw"]);
			file_put_contents("../private/passwd", serialize($array));
			echo "OK\n";
			return TRUE;
		}
	}
	return FALSE;
}

if ($_POST["submit"] == "OK" && $_POST["login"] && $_POST["oldpw"] && $_POST["newpw"])
{
	$array = array();
	$array = unserialize(file_get_contents("../private/passwd"));
	if (if_username_exists($array) == FALSE)
		echo "ERROR\n";
}
else
	echo "ERROR\n";

?>
