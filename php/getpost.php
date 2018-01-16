<?php

require_once("connection.php");

if(isset($_POST['ac']) AND $_POST['ac'] == "add"){
	$title  = $_POST['txt_name'];
	$min_salary = $_POST['txt_min_salary'];
	$max_salary = $_POST['txt_max_salary'];

	$q = "INSERT INTO designation(`title`,`min_salary`,`max_salary`) VALUE(?,?,?)";

	try {
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($title,$min_salary,$max_salary));
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	if($response){
		echo "Record Inserted";
	}else{
		echo "Failed To Insert";
	}
	
	

}




//print_r($_POST);
// if(isset($_GET['name'])){
// 	echo $_GET['name'];
// }else{
// 	echo "Name Not Set";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET - POST METHOD</title>
</head>
<body>
	<form method="post" action="">
		<label for="txt_name">Name: </label>
		<input type="text" id="txt_name" name="txt_name" />
		<label for="txt_min_salary">Min Salary: </label>
		<input type="text" id="txt_min_salary" name="txt_min_salary" />


		<label for="txt_max_salary">Max Salary: </label>
		<input type="text" id="txt_max_rollno" name="txt_max_salary" />
		<br>

		
		<input type="hidden" name="ac" value="add">
		<input type="submit" value="Submit">

	</form>
</body>
</html>
