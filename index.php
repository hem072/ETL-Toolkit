<?php

$conn=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("trip",$conn);
?>
<html>
<head><title>ETL</title>>

<link rel="text/stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<div class="row">

		<div class="col-lg-4"><BUTTON name="extractmysql" class="btn btn-primary">Extract</BUTTON></div>
</div>
</div>
	</body>
</html>