<html><body>
<?php
include 'confi.php';
$conn = OpenCon();
session_start();
$name = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$sql = "insert into login(username,pwd,gender,category) values ('$name', '$password', '$gender', '$category')";

mysqli_query($conn, $sql);
    header("Location: login.php");
    ?>
    
</body>
</html>


