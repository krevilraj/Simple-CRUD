<?php
// connecting to the database

include( 'dbconnect.php' );

if ( !isset( $_SESSION['user_login'] ) ) {
    header( 'Refresh: 1; URL=login.php' );
    // redirect to add.php
}
// initialize variables
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL </title>
    <link rel='stylesheet' type='text/css' href='style.css'>
</head>

<body>
    <?php if ( isset( $_SESSION['message'] ) ): ?>
    <div class='msg'>
        <?php
echo $_SESSION['message'];

unset( $_SESSION['message'] );
?>
    </div>
    <?php endif ?>

    <form method='post' action='insert.php' enctype="multipart/form-data">

        <div class='input-group'>
            <label>Name</label>
            <input type='text' name='name' id='name1'>
        </div>
        <div class='input-group'>
            <label>Address</label>
            <input type='text' name='address' id='address1'>
        </div>
        <div class='input-group'>
            <input type='file' name='image' />
        </div>
        <div class='input-group'>
            <button class='btn' type='submit' name='save'>Save</button>
        </div>
    </form>
</body>

</html>