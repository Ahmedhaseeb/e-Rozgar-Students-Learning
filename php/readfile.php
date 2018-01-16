<?php 
	//readfile("testfile.txt");
	
	$file = fopen("testfile.txt", "w");
	$string = "Hello this is a test string";
	fwrite($file, $string);
 ?>