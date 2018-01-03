
<!doctype html>
<html>
	<head>
		<title>PHP - Arrays</title>
	</head>
	<body>



		
		
		<?php 



			// implode and explode
			// 
			
			$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";


				$temp = explode(",", $temp);
				print_r($temp);
				echo "<br>";
				print_r(implode("|", $temp));
				die();
				$size = sizeof($temp);

				$sum = 0;
				foreach ($temp as $key => $value) {
					$sum = $sum + $value;
				}
				$avg =  $sum/$size;
				echo $avg;
				die();

			//php - list function
			//
			//
			

			
			$numbers = array(1,2,1,7,0,1,300,100);
			
			print_r(end($numbers));
			die();
			print_r(each($numbers));
			print_r(each($numbers));
			reset($numbers);
			print_r(each($numbers));

			die();
			//rsort($numbers);
			//sort($numbers);
			shuffle($numbers);
			print_r($numbers);

			die();

			$student = array(
				"name" => "Haseeb",
				"rollno" => 66,
				"age" => 22,

				array(
					"name" => "Haseeb",
					"rollno" => 66,
					"age" => 22
				)
			);


			echo count($student,true);
			die();

			if(is_array($student)){

				echo "students is an array";
			}
			echo "<br>";
			while ( list($key, $value) = each($student) ) {
				echo $key ."  =>  ".$value."<br>";
			}





			//PHP -Array Numeric Indexed
			$array = array("Ahmed","22","66",6.6,1000);

			// PHP Associative Array
			$student = array(
				"name" => "Haseeb",
				"rollno" => 66,
				"age" => 22
			);

			//echo $student['name'] . "<br>" . $student['rollno'] . "<br>". $student['age'];
			//
			

			$students = array(
				
				array(
					"Ahmed", 66, 22
				),
				array(
					"Sufian", 21, 22
				),
				array(
					"abc", 22, 89
				)
		);
		$cars= array(
			array("bmw",12,22,20),
			array("toyota",13,1,0),
			array("smd",14,9,6)
		);
          //echo $cars[2][0];
			
		?>

	</body>
</html>
