<html><body>
<?php
include 'confi.php';
$conn = OpenCon();
session_start();
    
$fno = $_POST['fno'];
$head_name = $_POST['head_name'];
$mem_no = $_POST['mem_no'];
$type = $_POST['type'];
$phno = $_POST['phno'];
$gender = $_POST['gender'];
$tid = $_POST['tid'];
$sql = "insert into apartment(fno,head_name,mem_no,type,phno,gender,tid) values ('$fno', '$head_name', '$mem_no', '$type','$phno','$gender','$tid')";

mysqli_query($conn, $sql);
    header("Location: manage.php");
    ?>
    
</body>
</html>