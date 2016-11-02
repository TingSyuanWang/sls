<?php
	//setting database
	$db_host = "localhost";
	$db_username = "sls";
	$db_password = "bg8cw3DDgQhHqje6";
	// connect to server
	$db_link = @mysql_connect($db_host, $db_username, $db_password);
	if (!$db_link) die("fail to connect to server!!!");
	// utf proofread
	mysql_query("SET NAMES 'utf8'");
?>
