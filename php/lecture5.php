<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP- Control Flow</title>
</head>
<body>
	<?php 


		//foreach
		$array = array(
			"name" => "Ahmed",
			"Class" => "BSCS",
			2,3,4,5,6);

		echo $array['Class'] . "<br>";
		
		foreach($array as $index => $value){
			echo $index. " => " .$value . "<br>";
		}



		die();
		do {
			echo "something";
		} while (false);




		die();
		//While loop
		//
		
		$count = 0;
		while ($count <= 10) {
					echo ++$count . "<br>";

					

				}		



		die();
		// for loop
		for($i = 0;$i<10;$i++){
			echo $i . "<br>";
		}

		//echo $i;








		die();
		// ? Operator

		 $x =5;
		 $y=6;
		 $z= $x>$y ? "x is greater then y" : "x is less then y";
		 echo $z;



		die();

		//switch case break
		//
		

		$day = "Monday";

		switch ($day) {
			case 'Monday':
				echo "Day is Monday<br>";
				echo "asdasdas<br>";
				//break;
			
			case 'Tuesday':
				echo "Day is Tuesday";
				//break;

			case 'Wednessday':
				echo "Day is Wednessday";
				//break;
			default:
				echo "An unexpected day entered";
				//break;
		}

		die();
		// if condition

		
		$year = 2000;

		if($year == 2017){
			echo "Year is 2017";
		}elseif($year == 2000){
			echo "Year is 2000";
		}elseif($year == 2015){
			echo "year is 2013";
		}else{
			echo "I don't know what is the year";
		}

		die();
		//if - elseif
		$marks = 50;
		if($marks >= 85){
			echo "4 GPA";
		}
		if ($marks >= 75 AND $marks < 85){
			echo "3.7 GPA";
		}
		if ($marks >= 69 AND $marks < 70){
			echo "3.3";
		}else{
			echo "<span style='color:red'>Fail Try Again</span>";
		}
	?>
</body>
</html>