<?php
if ( isset( $_POST['save'] ) ) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    mysqli_query( $db, "INSERT INTO info (name, address) VALUES ('$name', '$address')" );

    $_SESSION['message'] = 'Address saved';
    header('Refresh: 1; URL=add.php');
}
?>