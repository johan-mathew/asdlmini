<html><body>
<?php
include 'confi.php';
$conn = OpenCon();
session_start();
    
$vname = $_POST['vname'];
$phno = $_POST['phno'];
$time_in = $_POST['time_in'];
$time_out = $_POST['time_out'];
$date = $_POST['date'];
$fno = $_POST['fno'];
$purpose = $_POST['purpose'];
$tid = $_POST['tid'];
$sql = "insert into visitor(vname,phno,time_in,time_out,date,fno,purpose,tid) values ('$vname', '$phno', '$time_in', '$time_out','$date','$fno','$purpose','$tid')";

mysqli_query($conn, $sql);
    header("Location: manage.php");
    ?>
    
</body>
</html>