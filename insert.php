<?php

// echo $_POST['name1'];
// echo $_POST['address1'];
include('dbconnect.php');
// $name = $_POST['name'];

// $address = $_POST['address'];

// $sql = "INSERT INTO info (name, address)
// VALUES ('$name', '$address')";

// if ($db->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }



if ( isset( $_POST['save'] ) ) {   // check if button is click
    $name = $_POST['name'];
    $address = $_POST['address'];

    mysqli_query( $db, "INSERT INTO info (name, address) VALUES ('$name', '$address')" );  // insert to database

    $_SESSION['message'] = 'Address saved'; // session ko kaam message dine
    
    header('Refresh: 1; URL=add.php'); // redirect to add.php
}
?>