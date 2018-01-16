<?php 

$un = "root";
$pwd = "";
$host = "localhost";
$db = "organization";

$db = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8mb4', "root","");

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>