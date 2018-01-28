<?php
	include_once("handleDB.php");
	$name = $_POST["name"]; 
	$massage = $_POST["massage"];
	insertData($name , $massage);
			
?>