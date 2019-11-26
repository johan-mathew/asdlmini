<?php
session_start();
include '..\config\confi.php';
$conn = OpenCon();

$name = $_POST['username'];
$password = $_POST['password'];

$sql="select * from login where username='$name' and pwd='$password'";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
$_SESSION['category'] = $res['category'];
$_SESSION['varname'] = $name;
if(is_null($res)){
    header("location: ../fail.php");
}
if($res['username']=$name){
    
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