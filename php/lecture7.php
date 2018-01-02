<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - Functions</title>
</head>
<body>
	<?php 
		require_once "functions.php";
		echo "asd";
		die();



		//Static Variable
		

		echo static_variable();
		echo static_variable();
		echo static_variable();

		die();
		$myName = "aHMed";
		echo $myName;
		fix_names($myName);
		echo $myName;
		die();
		echo " ";
		echo fix_names("hASEEb");

		

		die();
		echo ucfirst("any text here");
		die();
		echo sum(1,4);

		
		//user define function - function defination
		
		
		



		$num1 = 60;
		$num2 = 100;
		$sum = suM($num1,$num2);
		echo $sum;
		// sum();
		// sum();
		// sum();

		//print("This is print Function");
		//2 > 6 ? print ("true") : print("false");
		//phpinfo();

	?>
</body>
</html>