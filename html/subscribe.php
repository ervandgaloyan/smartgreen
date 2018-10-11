<?php 
	$myfile = fopen("subscribers.txt", "w") or die("Unable to open file!");
	$txt = "mail@jd.ld\n";
	fwrite($myfile, $txt);
	fclose($myfile);
	header("Location: index.php");
 ?>