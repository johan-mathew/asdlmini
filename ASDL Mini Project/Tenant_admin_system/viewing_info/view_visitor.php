<?php

session_start();
include '..\config\confi.php';
$conn = OpenCon();
$id=$_SESSION['pid'];
$sql="select * from visitor where tid=$id";
$rok=mysqli_query($conn, $sql);
//$res= mysqli_fetch_assoc($result);

$sq="select * from apartment where tid=$id";
$result=mysqli_query($conn, $sq);
$re= mysqli_fetch_assoc($result);
while($res = mysqli_fetch_assoc($rok)){
                
                echo "<h2>Visitor</h2>";
                echo "<ul>FLAT NO: &nbsp". $re["fno"]. "</ul>";
                echo "<ul>HEAD NAME: &nbsp". $re["head_name"]. "</ul>";
               
               echo "<ul>Tenant Id: &nbsp". $res["tid"]. "</ul>";
                echo "<ul>Visitor Name: &nbsp". $res["vname"]. "</ul>";
                echo "<ul>Date: &nbsp". $res["date"]. "</ul>";
                echo "<ul>Time in: &nbsp". $res["time_in"]. "  
                Time out: &nbsp".$res['time_out']."     </ul>";
            
                echo "<ul>Purpose: &nbsp". $res["purpose"]. " </ul>";
             echo "<hr>";
    
}
?>
<html>
    <head>
        
    
    </head>
<body>
     <a class="button" href="..\manager\manage.php">BACK</a>
      
</body>
</html>