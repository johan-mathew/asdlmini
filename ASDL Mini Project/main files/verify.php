<?php
include 'confi.php';
$conn = OpenCon();
session_start();
$name = $_POST['username'];
$password = $_POST['password'];

$sql="select * from login where username='$name' and pwd='$password'";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
if($res['username']==$name){
    echo "successss";
    header("Location: manage.php");
}
else
    echo "LOGIN FAILED";

?>