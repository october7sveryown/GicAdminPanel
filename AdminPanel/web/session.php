<?php
	session_start();
	
	function logged_in() {
    return isset($_SESSION['username']);//set new timestamp
}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			echo "<script>alert('Not logged in.Please login');document.location='signin.php';</script>";
		}
	}


?>