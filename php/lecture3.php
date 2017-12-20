<?php //namespace asdsdasd\asddsa ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lecture 3</title>
</head>
<body>

	<?php 



	function keep_track(){
		$count = 0;
		$count++;
		echo $count."<br>";
	}

	keep_track();
	keep_track();


	die();
	
	$var1 = 200;
	

	function mul($val1 , $val2){
		global $var1;
		$var1 = "Calling from function inside";
	}

	echo $var1 ."<br>";
	mul(1,2);
	echo $var1;
	die();



	function sum($num1,$num2,$num3){
		$x = 200;
		echo $num1 + $num2 +$num3;
	}


	$num1 = 10;
	$num2 = 20;

	sum($num1,$num2,20);
	//echo $result;
	echo "<br>";
	echo $num1;
	die();
	$b = 10;
	$x = $b > 5 ? print "true" : print "false";
	echo $x;

	echo ("Asasdsa"),("Asdasdasdas"),
	("Asdasdsadasd"),
	"Asdasdasdasdasd";


	//$b = $b ? print "True" : print "False";
	//echo $b;


	//echo ("hello world"),
	//("asdasd"),
	//"asdasd";
	



	//abc();
	
	
	?>
</body>
</html>