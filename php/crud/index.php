<?php 
	require_once("connection.php");
	require_once("functions.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create, Retrive, Update And Delete (CRUD) in PHP</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3">
				<?php 
				if(isset($_SESSION['error']) AND !empty($_SESSION['error'])){
					?>
						<div class="alert alert-danger">
							<?php echo $_SESSION['message'];
							      $_SESSION['message'] = "";
							      unset($_SESSION['error']);
							 ?>
						</div>
					<?php
				}
				if(isset($_SESSION['success']) AND !empty($_SESSION['success'])){
					?>
						<div class="alert alert-success">
							<?php echo $_SESSION['message']; 
								  $_SESSION['message'] = "";
								  unset($_SESSION['success']);
							?>
						</div>
					<?php
				}

			?>
			
				<form action="" method="post">
					<input class="form-control form-group" type="text" name="cat_name" placeholder="Enter Category Name" />
					<input class="btn btn-md btn-primary" type="submit" name="submit" value="Save">
					<input class="form-control form-group" type="hidden" name="action" value="addNewCat">
				</form>



				<h1>Categories</h1>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$q = "SELECT * FROM categories";
							$stmt = $db->query($q);
							while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
									?>
									<tr>
										<td><?php echo $row['id']; ?> </td>
										<td><?php echo $row['name']; ?></td>
										<td>
											<a href="?action=delCat&id=<?php echo $row['id']; ?>">
												Delete
											</a>/
											<a href="update.php?action=editCat&cat_id=<?php echo $row['id']; ?>&cat_name=<?php echo $row['name']; ?>">
												Update
											</a>
										</td>
									</tr>
									
									<?php
								}
						?>
					</tbody>

				</table>

			</div>

		</div>
	</div>

</body>
</html>