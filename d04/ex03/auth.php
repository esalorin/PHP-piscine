<?php
function auth($login, $passwd)
{
	$array = array();
	$array = unserialize(file_get_contents("../private/passwd"));
	foreach($array as $a)
	{
		if ($a["login"] == $login && $a["passwd"] == hash("sha512", $passwd))
			return TRUE;
	}
	return FALSE;
}
?>