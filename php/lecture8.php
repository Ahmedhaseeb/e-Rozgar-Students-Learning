<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - OOP (Object Oriented Programming)</title>
</head>
<body>
	<?php 
		// Protected Access Specifier
		
		class Person{
			protected $name;
			protected $age;
			protected $gender;
		}


		class Teacher extends Person{
			private $qualification;
			public $abc;
			const  xyz = 0;

			function __construct(){
				$this->name = "Ahmed";
				$this->qualification = "BSCS";
				$this->age = 22;
				$this->gender = "male";
				$this->abc = "whatever";
			}
			public function getTeacherById($id){
				echo $this->name."<br>";
			}
			public static function message(){
				echo "I am a teacher<br>";
			}
		}

		Teacher::message();


		$teacher1 = new Teacher;
		$teacher1->getTeacherById(1);

		$teacher1->message();

		//print_r($teacher1);


		die();
		//Class Car
		//
		class Car{

			private $name;
			public $model;
			public $color;

			function __construct($name,$model,$color){
				$this->name = $name;
				$this->model = $model;
				$this->color = $color;
			}


			public function set_name($name){
				$this->name = $name;
			}

			function __destruct(){
				echo $this->name . " has been destroyed<br>";
			}

		}

		
		// Car1


		$car1 = new Car("Honda Civic","2018","Black");
		$car2 = new Car("BMW","2007","White");

		//print_r($car1);
		//print_r($car2);



		//$car1->name = "Honda Civic";
		// $car1->set_name("Honda Civic");
		// $car1->model = "2010";
		// $car1->color = "Black";

		// //Car2
		// $car2 = new Car;
		// //$car2->name = "BMW";
		// $car2->set_name("BMW");
		// $car2->model = "2010";
		// $car2->color = "While";

//		print_r($car2);











		die();
		//
		//

		function blablablabla(){

		}

		if(function_exists("blablablabla")){
			echo "Function exist";
		}else{
			echo "Function not exist";
		}
			?>
</body>
</html>