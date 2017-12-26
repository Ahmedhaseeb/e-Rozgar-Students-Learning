<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Expression And Control Flow</title>
</head>
<body>
	<?php
	$a = 1;
	//echo ++$a;

	//echo $sum = 1 + 2;


	$condition = true;

	$result = $condition != true ? "abc" : "xyz";
	echo $result;

	die();
		$format = '(%2$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo '<pre>';
echo <<<EOH
 ---------     ---------  -- ---------
 result        value      op test
 ---------     ---------  -- ---------
EOH;


/*
 * Here are the examples.
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;
echo "\n Bitwise AND \n";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n Bitwise Inclusive OR \n";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n Bitwise Exclusive OR (XOR) \n";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
echo '</pre>';
		die();
		$output = `type lecture2.php`;
		echo "<pre>";
		echo $output;
		echo "</pre>";
		die();

		$day_number = 337;
		$days_to_new_year = 366 - $day_number; 
		
		//$z = $days_to_new_year > 30;
		//echo $z;
		
		//die();	
		if ($days_to_new_year < 30) {
			echo "Not long now till new year"; 
		}
		die();
		$myname = "Brian";

		$myage = 37;

		echo "a: " . 73 ."<br>"; //Numeric literal

		echo "b: " . "Hello" . "<br>"; // String literal

		echo "c: " . FALSE . "<br>"; //Constant literal

		echo "d: " . $myname . "<br>"; //String variable

		echo "e: " . $myage . "<br>"; // Numeric variable

		die();


		$y = 3 * (abs(-2) * 5);

		//echo $y;




		echo "a:[".(20 > 9)."]<br>";

		echo "b:[".(5 == 6)."]<br>";

		echo "c:[".(1 == 0)."]<br>";

		echo "d:[".(1 == 1)."]<br>";



		echo TRUE;
		echo "<br>";
		echo FALSE;









	?>
</body>
</html>