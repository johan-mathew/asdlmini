<html><body>
<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();
$name = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$category = $_POST['category'];
if($category=='manager'){
    $sql= "select max(tid) as a from login where category='manager'"; 
    $result=mysqli_query($conn, $sql);
    $res= mysqli_fetch_assoc($result);
   // echo $res['a'];
}
    elseif($category=='staff'){
        $sql= "select max(tid) as a from login where category='staff'"; 
        $result=mysqli_query($conn, $sql);
        $res= mysqli_fetch_assoc($result);
    }
    else{
        $sql= "select max(tid) as a from login where category='tenant'"; 
        $result=mysqli_query($conn, $sql);
        $res= mysqli_fetch_assoc($result);
        echo $res['a'];
    }
$tid=$res['a']+1;
$sql = "insert into login(username,pwd,gender,category,tid) values ('$name', '$password', '$gender', '$category','$tid')";
echo "jajajaja";
mysqli_query($conn, $sql);
   header("Location: ..\login\login.php");
    ?>
    
</body>
</html>


