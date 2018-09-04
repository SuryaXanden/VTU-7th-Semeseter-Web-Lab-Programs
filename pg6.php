<?php
print "Refresh the page to increase the counter";
$file = fopen("counter.txt","r"); //chmod counter.txt to 777
	$hits= fscanf($file,"%d");
fclose($file);
$hits[0]++;
$file = fopen($name,"w");
	fprintf($file,"%d",$hits[0]);
fclose($file);
print "<br>Total no of views : " . $hits[0];
?>
