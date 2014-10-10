<html>

<head>

<title>Online PHP Script Execution feedback</title>

</head>

<body>

<?php /*?>
<?php

require('dbConf.inc');

db_connect();


 //Take data
 
$f=mysql_real_escape_string($_POST['feedback']);
  



//Query

$query="INSERT INTO `feed`( `feedback`) VALUES ('$f')";


$exec=mysqli_query( db_connect(),$query);

if($exec){

  print "Succes";
}
 
 else
 {
 print "error".mysql_error;
 }  
db_close();

 
?>

<?php */

$con=mysqli_connect("localhost","abc","abc","spirit");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 //Take data
 
$f=mysqli_real_escape_string($con,$_POST['feedback']);
// Perform queries 
//mysqli_query($con,"SELECT * FROM Persons");
mysqli_query($con,"INSERT INTO feed (feedback) 
VALUES ('$f')");

mysqli_close($con);
?>
</body>

</html>
