<?php 
	session_start();
	$message = "";
	$error = false;
	$success = false;
	$db = new PDO('mysql:host=localhost;dbname=shop;charset=utf8mb4', "root","");
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		

?>