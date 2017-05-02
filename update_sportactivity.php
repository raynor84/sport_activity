<?php
$pdo = new PDO('mysql:host=localhost;dbname=scripting', 'root', 'root');
?>
<?php
$sql = "SELECT id, name, amount, date FROM sportactivity where id=".$_GET['id'] ." LIMIT 1";
$query = $pdo->query($sql);
foreach ($query as $row) {
?>
<html>
	<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	</head>
	<body>
<form action="save_activity.php" method="GET">
	<input name="id" type="hidden" value="<?php echo $_GET["id"]; ?>"/>
	<input name="name" placeholder="name" type="text" value="<?php echo $row["name"];?>" /><br />
	<input name="amount" placeholder="amount" type="text" value="<?php echo $row["amount"];?>" /><br />
	<input name="date" placeholder="Date" type="text" class="datepicker" value="<?php echo $row["date"];?>" /><br />
	<input type="submit" value="Submit" />
</form>
<?php
}
?>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script>
  $(function() {
    $(".datepicker").datepicker();
  });
  </script>
</body>
</html>
