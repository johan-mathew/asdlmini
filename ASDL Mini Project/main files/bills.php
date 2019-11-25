<?php

session_start();
include 'confi.php';
$conn = OpenCon();
$id=$_SESSION['pid'];
$sql="select * from bills where tid=$id";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);

$sq="select * from apartment where tid=$id";
$result=mysqli_query($conn, $sq);
$re= mysqli_fetch_assoc($result);
                echo "<h2>Bills to be paid during this month.</h2>";
                echo "<ul>FLAT NO: &nbsp". $re["fno"]. "</ul>";
                echo "<ul>HEAD NAME: &nbsp". $re["head_name"]. "</ul>";
               
               echo "<ul>Tenant Id: &nbsp". $res["tid"]. "</ul>";
                echo "<ul>Water Bill: &nbsp". $res["water"]. " Rs</ul>";
                echo "<ul>Electricity Bill: &nbsp". $res["electricity"]. " Rs</ul>";
                echo "<ul>Maintanence: &nbsp". $res["maintanence"]. " Rs</ul>";
            
                echo "<ul>LPG: &nbsp". $res["lpg"]. " Rs</ul>";
               $total=$res["water"]+$res["lpg"]+$res["electricity"]+$res["maintanence"];
                 echo "<ul><H1>Total Bill: &nbsp". $total. " Rs</ul></h1>";
    
?>
<html>
    <head>
        <link rel="stylesheet" href="bills.css">
   
    </head>
<body>
     <a class="button" href="manage.php">BACK</a>
      
</body>
</html>