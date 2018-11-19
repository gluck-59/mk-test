<?php
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
error_reporting(0);

function get_files($path, $order = 0, $mask = '*')
{
	$sdir = array();
	if (false !== ($files = scandir($path, $order)))
    {  
		foreach ($files as $i => $entry) 
        {
			if ($entry != '.' && $entry != '..' && fnmatch($mask, $entry)) 
			{
				$sdir[] = $entry;
			}
		}
	}
    return ($sdir);
}

$files = get_files(getcwd(), 0, '*.jpg');
$img = $files[array_rand($files)];
header ("Content-type: image/jpeg"); 
readfile($img);

?>