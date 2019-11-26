<?php
include '..\config\confi.php';
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
     header("Location: ..\manager\manage.php");
    echo "jajjajaja";
    }
    elseif($res['category']=='staff'){
        echo  "jajajja";
       header("Location: ..\staff\staff.php");
    }
    elseif($res['category']=='tenant'){
        header("Location: ..\user\user.php");
    }
    }
else
    echo "LOGIN FAILED";

?>