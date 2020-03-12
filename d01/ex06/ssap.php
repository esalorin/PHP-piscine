#!/usr/bin/php
<?PHP

function epur($str)
{
		$trimmed = trim(preg_replace('/ +/', ' ', $str));
		return $trimmed;
}

$removed = array_shift($argv);
$check = 0;

if ($argc > 1)
{
	foreach ($argv as $ar)
	{
		if (str_word_count($ar,0) > 1)
			$new = explode(' ', epur($ar));
		else
			$new = epur($ar);
		if ($check == 0)
		{
			$check = 1;
			$one_big = $new;
		}
		else
		{
			if (is_array($one_big) == 1)
			{
				if (is_array($new) == 1)
					$one_big = array_merge($one_big, $new);
				else
					array_push($one_big, $new);
			}
			else
			{
				if (is_array($new) == 1)
				{
					array_push($new, $one_big);
					$one_big = $new;
				}
				else
					$one_big = array($new, $one_big);
			}
		}		
	}
	sort($one_big);
	foreach ($one_big as $print)
		echo "$print\n";
}


?>
