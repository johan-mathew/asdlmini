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
?>
<html>
    <head>
       <link rel="stylesheet" href="user_visit.css">
    
    </head>
<body>
  <h1 style="text-align:center; font-size:75px;">CASEGGIATO</h1>
  <h1 style="text-align:center;" >Visitor List</h1>
<div class="disp"><div class="adjust">
<?Php
   
while($res = mysqli_fetch_assoc($rok)){
                echo "<br><br>";
                 $a=1;
                echo "<h2 style='font-family: verdana;'>Visitor &nbsp". $a ."</h2>";
     echo "<hr size='2px' color='black'>";
    echo "<ul>Date: &nbsp". $res["date"]. "</ul>";
     echo "<ul>Visitor Name: &nbsp". $res["vname"]. "</ul>";
                echo "<ul>FLAT NO: &nbsp". $re["fno"]. "</ul>";
                echo "<ul>HEAD NAME: &nbsp". $re["head_name"]. "</ul>";
               
               echo "<ul>Tenant Id: &nbsp". $res["tid"]. "</ul>";
               
                
                echo "<ul>Time in: &nbsp". $res["time_in"]. "  
                Time out: &nbsp".$res['time_out']."     </ul>";
            
                echo "<ul>Purpose: &nbsp". $res["purpose"]. " </ul>";
           echo "<br><br>";
            $a=$a+1;
}
?></div>
</div>
   <a style="margin-top:10px; margin-left:50%;" class="button" href="user.php">BACK</a>
      <br><br><br>
</body>
</html>