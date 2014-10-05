<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SpHub'</title>
<link rel="shortcut icon" href="../img/award.png" />
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <?php 

$con=mysqli_connect("localhost","abc","abc","spirit");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //Take data
 
//$f=mysqli_real_escape_string($con,$_POST['feedback']);
// Perform queries 
$r=3;
$result=mysqli_query($con,"SELECT * FROM feed ");
//mysqli_query($con,"INSERT INTO test values('$f',$m)");

 echo "<table class='table table-striped'>
        <caption>Test</caption><thead>
		<tr>
		<th>Fno</th>
		<th>FeedBack</th></tr></thead>" ;
while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>{$row['fno']}</td>";
echo "<td>{$row['feedback']}</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</div>
  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../js/bootstrap.js" ></script>

</body>
</html>
