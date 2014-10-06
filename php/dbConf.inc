
<?php
   
function db_connect(){



/* Config */
 

//Database Host
 
$db_host = 'localhost';

 

//Database Name 

$db_database = 'spirit';

 

//Database Username
 
$db_user = 'abc';

 

//Database Password 

$db_pass = '';

 

$db_server= mysql_connect($db_host, $db_user, $db_pass); 
    if (!$db_server) die("Unable to connect to MySQL: " . mysql_error()); 
  

 
   mysql_select_db( $db_database,$db_server) 
    or die("Unable to select database: " . mysql_error()); 

     
 
  };
 
  function db_close(){
   
  mysql_close();
  
 }; 


?>

