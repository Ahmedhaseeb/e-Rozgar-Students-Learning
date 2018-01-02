<?php 

function static_variable(){
			static $count = 1;
			return ++$count;
		}
function fix_names(&$name){
			$name = strtolower($name);
			$name = ucfirst($name);
			return $name;
		}

		function sum($num1, $num2){
			//echo "<h1>" . $num1 . $num2 . "</h1>";
			$sum =  $num1 + $num2;
			return $sum;
		}

?>