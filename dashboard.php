<?php 
include('dbconnect.php');  // connection database

if(!isset($_SESSION['user_login'])){
	 header('Refresh: 1; URL=add.php'); // redirect to add.php
}
	
