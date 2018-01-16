<?php 
$un = "root";
$pwd = "";
$host = "localhost";
$db = "organization";

$db = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8mb4', "root","");

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	$stmt = $db->prepare("SELECT * FROM employee");
	$response = $stmt->execute();
	$rows =$stmt->fetchAll();

} catch (Exception $e) {
	echo $e->getMessage()."<br>";	
	echo "ERROR CODE - 007";
}


			?>
<table border="1">
<thead>
	<th>Sr</th>
	<th>Name</th>
</thead>
	<tbody>
			<?php
foreach ($rows as $key => $value) {	
		?>
		<tr>
			<td><?php echo $value['employee_id']; ?></td>
			<td><?php echo $value['name']; ?></td>
		</tr>
		<?php
}
echo "</tbody>";
echo "</table>";
?>
