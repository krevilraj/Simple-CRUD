<?php 
include('dbconnect.php');  // connection database
	if (isset($_POST['save'])) {
$email = $_POST['email'];
$password = $_POST['password'];
		$record = mysqli_query($db, "SELECT * FROM user WHERE email='$email' and password='$password'");
		if ( mysqli_num_rows($record) == 1 ) { // then only user logged in
			$_SESSION['user_login'] = true;
			
    
    header('Refresh: 1; URL=dashboard.php'); // redirect to add.php
} else {
  echo "username or password wrong1"; // login redirect error session
}

    }
?>

