<?php
// session is remaining
if (!isset($_SESSION)) session_start();
$db = mysqli_connect( 'localhost', 'root', '', 'crud' );