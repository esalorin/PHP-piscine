<?PHP

function ft_split($str)
{
	$trimmed = trim(preg_replace('/\s+/', ' ', $str));
	if ($trimmed == NULL)
		return NULL;
	$array = explode(' ', $trimmed);
	sort($array);
	return $array;
}

?>