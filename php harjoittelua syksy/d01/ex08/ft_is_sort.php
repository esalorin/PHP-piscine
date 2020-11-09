<?php

function ft_is_sort($tab)
{
	$original = $tab;
	sort($tab);
	if ($tab == $original)
		return TRUE;
	else
		return FALSE;
}

?>