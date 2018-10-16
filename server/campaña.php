<?php 
	session_start();
	$dw = mysqli_connect("localhost", "root","","db_politico");
	$dw->set_charset("utf8");