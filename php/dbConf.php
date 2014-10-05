
<?php
   
function db_connect(){



/* Config */
 

//Database Host
 
$db_host = 'localhost';

 

//Database Name 

$db_database = 'spirit';

 

//Database Username
 
$db_user = 'test';

 

//Database Password 

$db_pass = 'test';

 
$db_server = mysqli_connect($db_host, $db_user, $db_pass); 
    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error()); 
  

 
   mysqli_select_db($db_server, $db_database) 
    or die("Unable to select database: " . mysql_error()); 

     
 
  };
 
  function db_close(){
   
  mysqli_close();
  
 }; 


?>

