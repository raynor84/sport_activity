<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');

if((empty($_GET["name"]))||($_GET["name"]=="")) {
	throw new Exception("Please provide a name");
}
if((empty($_GET["amount"]))||($_GET["amount"]=="")) {
	throw new Exception("Please provide an amount");
}
if((empty($_GET["date"]))||($_GET["date"]=="")) {
	throw new Exception("Please provide a Date");
}?>
<?php
$date = urldecode($_GET["date"]);
if (($timestamp = strtotime($date)) === false)
{
	throw new Exception("Date given is invalid");
}
$date = date('Y-m-d h:m:s',  $timestamp);
$statement = $pdo->prepare("Insert into sportactivity (name, amount, date) VALUES (?,?,?)");
$statement->execute(array($_GET['name'], $_GET['amount'], $date));
 header('location: sportactivity_overview.php');
?>

