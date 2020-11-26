<?php
	$connect = mysqli_connect('localhost', 'root', 'mysql', 'db') or die ("connect fail");
	session_start();
	$connect->query("set session character_set_connection=utf8;");
	$connect->query("set session character_set_results=utf8;");
	$connect->query("set session character_set_client=utf8;");

?>
