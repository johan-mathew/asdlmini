<html><body>
<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();
    
$tid = $_POST['tid'];
$water = $_POST['water'];
$electricity = $_POST['electricity'];
$maintanence = $_POST['maintanence'];
$lpg = $_POST['lpg'];

$sql = "insert into bills(tid,water,electricity,maintanence,lpg) values ('$tid', '$water', '$electricity', '$maintanence','$lpg')";

mysqli_query($conn, $sql);
    header("Location: staff.php");
    ?>
    
</body>
</html>