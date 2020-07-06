<?php 
// connecting to the database
include('dbconnect.php');
// initialize variables
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD: CReate, Update, Delete PHP MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
        <?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
    </div>
    <?php endif ?>
	
    <form method="post" action="authenticate.php">

        

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" id="name1">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" id="address1">
        </div>
        <div class="input-group">


            <button class="btn" type="submit" name="save">Login</button>

        </div>
    </form>
</body>

</html>