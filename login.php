<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>
<?php require_once("includes/password.php"); ?>

<?php
$username = "";
if (isset($_POST['submit'])) {
	// Process the form

	
		if (empty($errors)) {
    // Attempt Login

		$username = $_POST["username"];
		$password = $_POST["password"];
		$found_user = attempt_login($username, $password);

    if ($found_user) {
      // Success
			// Mark user as logged in
			
			
			$_SESSION["username"] = $found_user["username"];
		     redirect_to("index.php");
    } else {
      // Failure
			  $_SESSION["message"] = "Username/password not found.";
			 
			 redirect_to("home.php");
    }
  }
} 
else {
  // This is probably a GET request
  			 redirect_to("home.php");
} // end: if (isset($_POST['submit']))


?>


<?php
	if (isset($connection)) { mysqli_close($connection); }
?>






