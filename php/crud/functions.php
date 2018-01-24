<?php 
	if(isset($_POST['action']) AND $_POST['action'] == "addNewCat"){

		$name = $_POST['cat_name'];
		$q = "INSERT INTO categories(`name`) VALUES(?)";
		$stmt = $db->prepare($q);
		$response = $stmt->execute(array($name));
		if($response){
			$success = true;
			$error = false;
			$message = "Category Inserted";
			$_SESSION['error'] = $error;
			$_SESSION['success'] = $success;
			$_SESSION['message'] = $message;
}else{
			
			$error = true;
			$success = false;
			$message = "Failed To Insert Category";
			$_SESSION['error'] = $error;
			$_SESSION['success'] = $success;
			$_SESSION['message'] = $message;
		}

	}

	if(isset($_GET['action']) AND $_GET['action'] == "delCat"){

			$id = $_GET['id'];
			$q = "DELETE from categories where id = ?";
			try {
				$stmt = $db->prepare($q);
				$response = $stmt->execute(array($id));
				if($response){
					$success = true;
					$error = false;
					$message = "Category Updated";
					$_SESSION['error'] = $error;
					$_SESSION['success'] = $success;
					$_SESSION['message'] = $message;
				}else{
					$error = true;
					$success = false;
					$message = "Failed To Delete Category";
					$_SESSION['error'] = $error;
					$_SESSION['success'] = $success;
					$_SESSION['message'] = $message;
				}				
			} catch (Exception $e) {
				echo $e->getMessage();
			}

		
	}

	if(isset($_POST['action']) AND $_POST['action'] == "updateCat"){
			$id = $_POST['cat_id'];
			$name = $_POST['cat_name'];
			$q = "UPDATE categories SET name = ? where id = ?";
			try {
				$stmt = $db->prepare($q);
				$response = $stmt->execute(array($name,$id));
				if($response){
					$success = true;
					$error = false;
					$message = "Category Updated";
					$_SESSION['error'] = $error;
					$_SESSION['success'] = $success;
					$_SESSION['message'] = $message;
				}else{
					$error = true;
					$success = false;
					$message = "Failed To Update Category";
					$_SESSION['error'] = $error;
					$_SESSION['success'] = $success;
					$_SESSION['message'] = $message;
				}			
				header('location: index.php');
			} catch (Exception $e) {
				echo $e->getMessage();
			}

		
	}

?>