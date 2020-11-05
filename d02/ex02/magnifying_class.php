#!/usr/bin/php
<?PHP

$file = file($argv[1]);

$str = implode("", $file);

$new = preg_replace_callback("/<a(.|\n)*?<\/a>/", function ($matches)
		{
			$matches[0] = preg_replace_callback("/title=\"(.|\n)*?\"/", function ($matches)
			{
				return ($matches[0] = preg_replace_callback("/\"(.|\n)*?\"/", function ($matches)
				{
					return (strtoupper($matches[0]));
				}, $matches[0]));
			}, $matches[0]);
			
			$matches[0] = preg_replace_callback("/>(.|\n)*?</", function ($matches)
			{
					return (strtoupper($matches[0]));
			}, $matches[0]);
			return ($matches[0]);
		}, $str);

echo $new."\n";



?>