<?php
include 'confi.php';
$conn = OpenCon();
session_start();
$name = $_POST['username'];
$password = $_POST['password'];

$sql="select count(*) as cnt username,pwd from login where username='$name' and pwd='$password'";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
if($res[cnt]>0)
    echo "successss";
    header("Location: <enter name of php file>.php");
//else
 //   echo "LOGIN FAILED";

?>