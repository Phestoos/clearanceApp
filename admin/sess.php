<?php
	session_start();
	$date = date("yy/mm/d");
	//if($date === "2019/06/06"):
	//header("location:login.php");
	//endif;
	if(!isset($_SESSION['username'])):

		header("location:login.php");
	endif;
?>
