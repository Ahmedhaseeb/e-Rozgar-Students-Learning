<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Lecture</title>
</head>
<body>
<?php



	

		//define("DOCUMENT_ROOT", "http://localhost/php/");
		

		if(defined("DOCUMENT_ROOT")){
			echo "Already Defined";
		}else{
			echo "DOCUMENT_ROOT Not Defined";
		}

		die();



		$count  = 50;
		$msg = "You have ". $count . "new message";

		$pi = "3.14";

		$area = $pi * (1 * 10);
		echo $area;
		die();
		echo <<<_END
<h1 class="abc">$msg</h1><br>

<pre>
    This is 
    pre 
    tag</pre>


_END;

//die();



		echo "
			$msg
			<h1 class='abc'>This is another heading</h1>

		";

		



		die();
		$count = 20;
		$msg = "You have ";
		$msg .= $count;
		$msg .= " new messages";



		
		echo $msg1;

		die();
		$x = 1;
		$y  = 10;
		$z = 20;
		$sum = $x + $y;
		$sum = $sum + $z;

		$trainer1 = false;
		$trainer2 = true;
		$labmanager = true;


		$msg = "";


		$amonia = true;
		$bleach = false;




		if($amonia xor $bleach){
			echo "asd";
		}

		die();


		if(true)
			echo "asdasd";
		


		if($trainer1){
			
			echo "trainer1 is present";
			if($trainer2){

				echo "trainer2 is also present";

			}
		}
		

		die();

		if($x != $y){
			$q = true;
		}
		if(!$q){

				echo "q is true";
		}else{
			echo "q is false";
		}

		die();
		if($trainer1 == "present" || $trainer2 == "present" && $labmanager == "present"){
			echo "class will start";
		}else{
			echo "class will not start";
		}



		die();
		if(false){

			echo "x is not equal to y";
		}


		if(false){
			echo "x is equal to y";
		}elseif(false){
			echo "x is greater then equal to y";
		}elseif($x <= $y){
			echo "x less then equal to y";
		}

		echo "<br>";

		$num1  = 1;
		$num2 = 2;
		echo "Original Num1 = ". $num1;
		echo "<br>";
		echo "Original Num2 = ". $num2;
		echo "<br>";
		
		$x = $num1--;
		$y = --$num2;
		
		echo "x = ";
		echo $x;

		echo "<br>";
		
		echo "y = ";
		echo $y;

		echo "<br>";
		echo "num1 = ".$num1;
		echo "<br>";
		echo "num2 = ".$num2;
		die();


		die();

		$num1 = 6;
		$num2 = 7;
		$sum = $num1 + $num2;
		echo $num1;
		echo "<br>";
		$num1 %= $num2;
		

		echo $num1;





	?>

</body>
</html>