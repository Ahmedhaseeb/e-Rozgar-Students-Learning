<?php 
	require_once("connection.php");
	require_once("functions.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Records</title>
</head>
<body>

	<?php 
		if(isset($_GET['action']) AND $_GET['action'] == "editCat"){

			$name = $_GET['cat_name'];
			$id = $_GET['cat_id'];
	?>
	<form action="" method="post">
		<input class="form-control form-group" type="text" name="cat_name" value="<?php echo $name; ?>" placeholder="Enter Category Name" />
		<input class="btn btn-md btn-primary" type="submit" name="submit" value="Save">
		<input class="form-control form-group" type="hidden" name="action" value="updateCat">
		<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
	</form>
	<?php } ?>
</body>
</html>