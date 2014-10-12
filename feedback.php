<?php require_once("includes/session.php"); ?>
<?php require_once("includes/db_connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
if (isset($_POST['feedback'])) {
	// Process the form
	
	$feedback = mysql_prep($_POST["feedback_content"]);
	
	$query  = "INSERT INTO feed (";
	$query .= "  feedback";
	$query .= ") VALUES (";
	$query .= "  '{$feedback}'";
	$query .= ")";
	$result = mysqli_query($connection, $query);

	if ($result) {
		// Success
		$message = "Thanks for your Feedback";
		redirect_to("index.php");
	} else {
		// Failure
		$message = "Feedback creation failed.";
		redirect_to("index.html");
	}
	
} else {
	// This is probably a GET request
	redirect_to("index.html");
}

?>


<?php
	if (isset($connection)) { mysqli_close($connection); }
?>
