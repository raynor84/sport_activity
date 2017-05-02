<html>
	<head>
		<link rel="stylesheet" href="css/stylesheet.css">
	</head>
	<body>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');

//Migration
if((array_key_exists("migrate", $_GET))&&($_GET["migrate"]=="true")) {
	$statement = $pdo->prepare("Insert into sportactivity (name, amount) VALUES (?,?)");
$statement->execute(array('Schwimmen', '35 Bahnen'));

}
?>
<a href="new_sportactivity.php">Add</a><br /><br />
<?php
$sql = "SELECT id, name, amount, date FROM sportactivity Order By Date DESC";
?>
<table>
	<tr>
		<th>Name:</th>
		<th>Menge:</th>
		<th>Datum:</th>
		<th>Action:</th>
	</tr>
<?php foreach ($pdo->query($sql) as $row): ?>
	<tr>
		
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['amount']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><a href="update_sportactivity.php?id=<?php echo $row['id']; ?>">update</a> <a href="delete_sportactivity.php?id=<?php echo $row['id']; ?>">delete</a></td>
	</tr>
<?php endforeach; ?>
</table>
	</body>
</html>

