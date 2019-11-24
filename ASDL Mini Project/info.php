<?php
include 'config.php';
$conn = OpenCon();
session_start();
$cid=$_SESSION['booking_id'];
echo $cid; 
?>
