<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');

if((empty($_GET["id"]))||($_GET["id"]=="")) {
	throw new Exception("Please provide an id");
}
if((empty($_GET["name"]))||($_GET["name"]=="")) {
	throw new Exception("Please provide a name");
}
if((empty($_GET["amount"]))||($_GET["amount"]=="")) {
	throw new Exception("Please provide an amount");
}
?>
<?php
$date = urldecode($_GET["date"]);
if (($timestamp = strtotime($date)) === false)
{
	throw new Exception("Date given is invalid");
}
$date = date('Y-m-d h:m:s',  $timestamp);

$statement = $pdo->prepare("Update sportactivity SET name = ? , amount = ?, date = ? where id=". $_GET["id"]);
$statement->execute(array($_GET['name'], $_GET['amount'], $date));
echo $_GET['name']." ".$_GET["amount"];

 header('location: sportactivity_overview.php');
?>
