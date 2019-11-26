<?php
include 'confi.php';
$conn = OpenCon();
session_start();
$name = $_POST['username'];
$password = $_POST['password'];

$sql="select * from login where username='$name' and pwd='$password'";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
$_SESSION['category'] = $res['category'];
if($res['username']==$name){
    
    if($res['category']=='manager'){
     header("Location: manage.php");
    echo "jajjajaja";
    }
    elseif($res['category']=='staff'){
        echo  "jajajja";
       header("Location: staff.php");
    }
    else{
        header("Location: tenant.php");
    }
    }
else
    echo "LOGIN FAILED";

?>