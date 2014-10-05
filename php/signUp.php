<html>

<head>

<title>Online PHP Script Execution</title>

</head>

<body>



<?php

require('dbConf.inc');

db_connect();


 //Take data
 
$name=mysql_real_escape_string($_POST['name']);
  
$email=mysql_real_escape_string($_POST['email']);
   
$password=mysql_real_escape_string($_POST['password']);
    
$telephone=mysql_real_escape_string($_POST['telephone']);
     
$year=mysql_real_escape_string($_POST['year']);
     
 $branch=mysql_real_escape_string($_POST['branch']);
       
$sex=mysql_real_escape_string($_POST['sex']);
 


//Query

$query="Insert into student values('$name','$email','$password','$telephone','$year','$branch','$sex')";


$exec=mysql_query($query);

if($exec){

  print "Succes";
}
 
 else
 {
 print "error".mysql_error;
 }  
db_close();

 
?>


</body>

</html>
