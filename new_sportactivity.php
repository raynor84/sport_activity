<html>
	<head>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
	</head>
	<body>
<form action="create_activity.php" method="GET">
	<input name="name" placeholder="name" type="text" value="" /><br />
	<input name="amount" placeholder="amount" type="text" value="" /><br />
	<input name="date" placeholder="Date" id="datepicker" type="text" value="" /><br />
	
	<input type="submit" value="Submit" />

</form>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <script>
  $(function() {
    $("#datepicker").datepicker();
  });
  </script>
	
	</body>
</html>
