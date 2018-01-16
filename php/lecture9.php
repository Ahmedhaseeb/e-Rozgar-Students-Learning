<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - FILE HANDLING</title>
</head>
<body>
	<?php


		$fp = fopen("lecture9.txt","r");
		$line = fgets($fp);
		echo $line."<br>";
		fseek($fp,0,SEEK_SET);
		$line = fgets($fp);
		echo $line;

		die();

		//copy("lecture9.txt","lecture9-copy.txt");


		if(file_exists("output.txt")){
			unlink("output.txt");
			echo "file deleted";
		}else{
			echo "file not exist";
		}
		// $fp = fopen("lecture9.txt","a");
		// fwrite($fp,"Ahmed\r\n");
		// //$data = fread($fp,8);
		// //echo $data;

		// fclose($fp);





		// $data ="My Name is Waqas";
		// file_put_contents("output.txt" ,$data,FILE_APPEND) or die(Error);
		// echo "Data i written";




	 ?>
</body>
</html>