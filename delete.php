<?php 

include('dbconnect.php');
if ( isset( $_GET['del'] ) ) {
   
    $id = $_GET['del']; 
    mysqli_query( $db, "DELETE FROM info WHERE id=$id" );
    $_SESSION['message'] = 'Address deleted!';

    header( 'location: homepage.php' );
}