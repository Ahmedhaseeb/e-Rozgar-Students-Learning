<?php 
	//require_once ("connection.php");
	if(isset($_POST['action']) AND $_POST['action'] == "addDesignation"){
		try {
			$stmt = $db->prepare(
			"INSERT INTO employee(`name`,`salary`,`designation_id`)
			VALUES(?,?,?);
			");
			$data = array(
				$_POST['name'],
				$_POST['salary'],
				$_POST['designation_id']
				);
			$respose = $stmt->execute($data);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		if($respose){
			$message =  "Employee Inserted";
		}else{
			$message = "Failed To Insert Employee";
		}

	}
?>
