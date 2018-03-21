<?php
include_once 'Database_Connect.php';
?>
<html>
<head><title>ETL</title>

<link rel="text/stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
	<div class="row">
<form action="main.php" method="POST">
		<div class="col-lg-4"><BUTTON name="extractmysql" class="btn btn-primary">Extract</BUTTON></div></form>
		<form action="main.php" method="POST">
		<div class="col-lg-6"><BUTTON name="extractoracle" class="btn success">Extract</BUTTON></div></form>
		<form action="main.php" method="POST">
		<div class="col-lg-8"><BUTTON name="extractmsaccess" class="btn success">Extract</BUTTON></div></form>
		<form action="main.php" method="POST">
		<div class="col-lg-12"><BUTTON name="trasnform" class="btn success">Transform</BUTTON></div></form>
		<form action="main.php" method="POST">
		<div class="col-lg-4"><BUTTON name="load" class="btn success">LOAD</BUTTON></div> </form>
	</form>
</div>
</div>
	</body>
</html>
<?php


if(isset($_POST['extractmysql']))
{
	extrcatmysql();
}
if(isset($_POST['extractmsaccess']))
{
	extractms();
}

if(isset($_POST['trasnform']))
{

}
	
	function extractms()
	{

$conn1=odbc_connect("trip", "","");
if($con)
{
	echo "Connected<br>";
}
else
{
	echo "Failed";
}
$sql="select * from driver_info";
$result=odbc_exec($con, $sql);
while ($row=odbc_fetch_array($result)) {
	echo "NAME: ". $row['ID'];
echo "NAME: ". $row['Name'];
echo "AGE : ". $row['cost'];
echo "<br/>";
}

	}
	function extrcatmysql()
{
	$query="select * from driver_info";
	$result=mysql_query($query);
	if(! $result)
{
 die('Could not get data: ' . mysql_error());
}
echo "<br>";
echo "<table border='0' id='tablecs' class='table'> ";
 
 echo"<tr>
 <th> id</th>
 <th> name</th>
 <th> dob</th>
 <th> Gender </th>
 <th> dltype </th>
 <th> cartype </th>
<th> triptype </th>
<th> cost </th>
 </tr>";
	while ( $row=mysql_fetch_array($result)) 
	{
echo " <tr><td>" .$row['id'].
" </td> <td>  ".$row['name'].  " </td> <td>  ".$row['dob']. "</td><td>".$row['Gender']. "</td><td>".$row['dltype'] ." </td> <td>  ".$row['cartype'].  " </td> <td>  ".$row['triptype']."</td><td>".$row['cost']." </td></tr>";

		
	}
}

function transform()
{



}
?>

