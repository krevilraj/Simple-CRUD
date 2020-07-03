<?php 
include('dbconnect.php');
    if ( isset( $_POST['update'] ) ) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
    
        mysqli_query( $db, "UPDATE info SET name='$name', address='$address' WHERE id=$id" );
        $_SESSION['message'] = 'Address updated!';
		header('Refresh: 1; URL=homepage.php');
        // header( 'location: homepage.php' );
    }
?>