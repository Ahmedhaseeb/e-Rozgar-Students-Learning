<?php 
	session_start();
	require_once("connection.php");
	require_once("add.php");
	if(isset($_GET['logout']) AND $_GET['logout'] == "true"){
		unset($_SESSION['login']);
		session_destroy();
	}

	if(!(isset($_SESSION['login']) AND $_SESSION['login'] == "ok")){
		header('location: login.php');
		exit();
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP - GET/POST - Database Connectivity</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>


	<?php 
		$stmt = $db->query("SELECT designation_id,title FROM designation");
		$designations = $stmt->fetchAll(PDO::FETCH_ASSOC);

	?>
	<div class="container">
		<a class="btn btn-md btn-danger" href="?logout=true">Logout</a>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3" >
				<?php 
					if(!empty($message)){
						echo '<div class="alert alert-success">';
							echo $message;
						echo '</div>';
					} 
				?>
				<form method="post" action="">
					<input class="form-control form-group" type="text" name="name" placeholder="Enter Name" />
					<input class="form-control form-group" type="number" name="salary" placeholder="Enter Salary"/>
					<select class="form-control form-group" name="designation_id" id="designation_id">
						<option value="">Select Designation</option>
						<?php  
							foreach ($designations as $key => $value) {
								echo <<<_END
			<option value="{$value['designation_id']}">{$value['title']}</option>
_END;
							}
						?>
					</select>
					<input class="form-control form-group" type="hidden" name="action" value="addDesignation"/>
					<input class="btn btn-md btn-primary form-group" type="submit" value="Save"/>
				</form>
			</div>

		</div>


	</div>


<?php 
	$q = "SELECT employee_id as id,name,salary,title 
	FROM employee,designation
	WHERE employee.designation_id = designation.designation_id
	"; 
	$stmt = $db->query($q);
	$totalRows = $stmt->rowCount();
?>

	<span>Total: <?php echo $totalRows; ?></span>
	<table border="1" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>SALARY</th>
				<th>DESIGNATION</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				while ($employee = $stmt->fetch(PDO::FETCH_ASSOC)) {
				?>
					<tr>
						<td> <?php echo $employee['id']; ?> </td>
						<td> <?php echo $employee['name']; ?> </td>
						<td> <?php echo $employee['salary']; ?> </td>
						<td> <?php echo $employee['title']; ?> </td>
					</tr>

				<?php
				}

			?>
		</tbody>
	</table>

<script src="assets/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>