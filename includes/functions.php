<?php

	function redirect_to($new_location) {
	  header("Location: " . $new_location);
	  exit;
	}

	function mysql_prep($string) {
		global $connection;
		
		$escaped_string = mysqli_real_escape_string($connection, $string);
		return $escaped_string;
	}
	
	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}

	function form_errors($errors=array()) {
		$output = "";
		if (!empty($errors)) {
		  $output .= "<div class=\"error\">";
		  $output .= "Please fix the following errors:";
		  $output .= "<ul>";
		  foreach ($errors as $key => $error) {
		    $output .= "<li>";
				$output .= htmlentities($error);
				$output .= "</li>";
		  }
		  $output .= "</ul>";
		  $output .= "</div>";
		}
		return $output;
	}
	
	function empty_date($var)
	{
		if (empty($var) or $var === '0000-00-00' or $var === '0000-00-00 00:00:00')
			return true;
		else
			return false;
	}
	function find_all_data($table_name) {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM ".$table_name ;
		
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function find_all_data_desc($table_name,$primary_id) {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM ".$table_name ;
		$query .= " ORDER BY ".$primary_id." DESC ";
		  $query .= "LIMIT 5";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function find_all_subjects($public=true) {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM subjects ";
		if ($public) {
			$query .= "WHERE visible = 1 ";
		}
		$query .= "ORDER BY position ASC";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function find_pages_for_cricket_news($subject_id) {
		global $connection;
		
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM cricket_news_page ";
		$query .= "WHERE cnpid = {$safe_subject_id} ";
		$page_set = mysqli_query($connection, $query);
		confirm_query($page_set);
		return $page_set;
	}
	
	function find_cricket_news_by_id($subject_id) {
		global $connection;
		
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM cricket_news ";
		$query .= "WHERE id = {$safe_subject_id} ";
        $query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
		
	}
	
	function find_pages_for_subject($subject_id, $public=true) {
		global $connection;
		
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE subject_id = {$safe_subject_id} ";
		if ($public) {
			$query .= "AND visible = 1 ";
		}
		$query .= "ORDER BY position ASC";
		$page_set = mysqli_query($connection, $query);
		confirm_query($page_set);
		return $page_set;
	}
	
	function find_all_admins() {
		global $connection;
		
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "ORDER BY username ASC";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		return $admin_set;
	}
	
	function find_subject_by_id($subject_id, $public=true) {
		global $connection;
		
		$safe_subject_id = mysqli_real_escape_string($connection, $subject_id);
		
		$query  = "SELECT * ";
		$query .= "FROM subjects ";
		$query .= "WHERE id = {$safe_subject_id} ";
		if ($public) {
			$query .= "AND visible = 1 ";
		}
		$query .= "LIMIT 1";
		$subject_set = mysqli_query($connection, $query);
		confirm_query($subject_set);
		if($subject = mysqli_fetch_assoc($subject_set)) {
			return $subject;
		} else {
			return null;
		}
	}

	function find_page_by_id($page_id, $public=true) {
		global $connection;
		
		$safe_page_id = mysqli_real_escape_string($connection, $page_id);
		
		$query  = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE id = {$safe_page_id} ";
		if ($public) {
			$query .= "AND visible = 1 ";
		}
		$query .= "LIMIT 1";
		$page_set = mysqli_query($connection, $query);
		confirm_query($page_set);
		if($page = mysqli_fetch_assoc($page_set)) {
			return $page;
		} else {
			return null;
		}
	}
	
	function find_admin_by_id($admin_id) {
		global $connection;
		
		$safe_admin_id = mysqli_real_escape_string($connection, $admin_id);
		
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "WHERE id = {$safe_admin_id} ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}

	function find_admin_by_username($username) {
		global $connection;
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM admins ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$admin_set = mysqli_query($connection, $query);
		confirm_query($admin_set);
		if($admin = mysqli_fetch_assoc($admin_set)) {
			return $admin;
		} else {
			return null;
		}
	}

	function find_default_page_for_subject($subject_id) {
		$page_set = find_pages_for_subject($subject_id);
		if($first_page = mysqli_fetch_assoc($page_set)) {
			return $first_page;
		} else {
			return null;
		}
	}
	
	function find_selected_page($public=false) {
		global $current_subject;
		global $current_page;
		
		if (isset($_GET["subject"])) {
			$current_subject = find_subject_by_id($_GET["subject"], $public);
			if ($current_subject && $public) {
				$current_page = find_default_page_for_subject($current_subject["id"]);
			} else {
				$current_page = null;
			}
		} elseif (isset($_GET["page"])) {
			$current_subject = null;
			$current_page = find_page_by_id($_GET["page"], $public);
		} else {
			$current_subject = null;
			$current_page = null;
		}
	}
function find_student_profile_by_username($username) {
		global $connection;
		$safe_username = mysqli_real_escape_string($connection, $username);
		$query  = "SELECT * ";
		$query .= "FROM student ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$user_set = mysqli_query($connection, $query);
		confirm_query($user_set);
		if($user = mysqli_fetch_assoc($user_set)) {
			
			return $user;
		} else {
			return null;
		}
	}
	
function find_user_by_username($username) {
		global $connection;
		$safe_username = mysqli_real_escape_string($connection, $username);
		$query  = "SELECT * ";
		$query .= "FROM login ";
		$query .= "WHERE username = '{$safe_username}' ";
		$query .= "LIMIT 1";
		$user_set = mysqli_query($connection, $query);
		confirm_query($user_set);
		if($user = mysqli_fetch_assoc($user_set)) {
			
			return $user;
		} else {
			return null;
		}
	}
	
	
	function password_check($password, $existing_hash) {
		// existing hash contains format and salt at start
	  $hash = crypt($password, $existing_hash);
	  if ($hash === $existing_hash) {
	    return true;
	  } else {
	    return false;
	  }
	}

	
	function attempt_login($username, $password) {
		$user = find_user_by_username($username);
		if ($user) {
			// found admin, now check password
			if (password_check($password, $user["password"])) {
				// password matches
				return $user;
			} else {
				// password does not match
				return false;
			}
		} else {
			// admin not found
			return false;
		}
	}

	function logged_in() {
		return isset($_SESSION['username']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			redirect_to("home.php");
		}
	}

?>

