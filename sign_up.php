<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/validation_functions.php"); ?>
<?php require_once("includes/password.php"); ?>

<?php
if (isset($_POST['submit'])) {
	// Process the form
	
	$name = mysql_prep($_POST["name"]);
	$username =  mysql_prep($_POST["username"]);
	$password = mysql_prep($_POST["password"]);
	
	$fields_with_max_lengths = array("password" => 18);
	validate_max_lengths($fields_with_max_lengths);
	$fields_with_min_lengths = array("password" => 4);
	validate_min_lengths($fields_with_min_lengths);
    $hash = password_hash($password, PASSWORD_BCRYPT);
	
	$email_id =  mysql_prep($_POST["email"]);
	$branch =  $_POST["branch"];
	$year =  $_POST["year"];
	$gender =  $_POST["gender"];

		if (!empty($errors)) {
		$_SESSION["errors"] = $errors;
		redirect_to("home.php");
	}

	$query  = "INSERT INTO student (";
	$query .= " `name`, `username`, `branch`, `year`, `gender`, `email_id`";
	$query .= ") VALUES (";
	$query .= "  '{$name}', '{$username}','{$branch}','{$year}','{$gender}','{$email_id}'";
	$query .= ")";
	$result = mysqli_query($connection, $query);
    $query2="INSERT INTO `login`(`Username`, `Password`) VALUES ('{$username}', '{$hash}')"   ;
    mysqli_query($connection,$query2);
	if ($result) {
		// Success
		$message = "Subject created.";
           $_SESSION["username"] = $username;

		redirect_to("index.php");
	} else {
		// Failure
		$message = "Subject creation failed.";
		redirect_to("home.php");
	}
	
} else {
	// This is probably a GET request
	redirect_to("home.php");
}

?>


<?php
	if (isset($connection)) { mysqli_close($connection); }
?>
