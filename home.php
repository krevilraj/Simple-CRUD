<?php 
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body> 
 <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
 
<div class="container">
  <h2>Basic Card</h2>
  <div class="row">
  <?php while ($row = mysqli_fetch_array($results)) { ?>
  <div class="col-md-3 card">
    <div class="card-body"><?php echo $row['name']; ?>
	<p><?php echo $row['address']; ?></p></div>
  </div>
  <?php } ?>
  </div>
</div>

</body>
</html>
