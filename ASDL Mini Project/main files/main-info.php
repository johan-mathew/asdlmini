<?php
session_start();
include 'confi.php';
$conn = OpenCon();

$tid = $_POST['tid'];
$sql="select * from apartment where tid=$tid";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
$_SESSION['pid'] = $tid;
if($res['tid']!=$tid)
    echo "No such user exist";
?>
<html>
   <head>
       <link rel="stylesheet" href="style_main.css">
   </head>
    <body>
       <div class="split left">
       <div style="margin-top: 55%">
       
       <a class="button" href="bills.php">VIEW BILLS</a>
         <a style="margin-left: 10px;" class="button" href="visitor.php">VISITOR INFO</a>
           </div>    
           
       </div>
        <div class="split right">
           <div class="disp">
           <br>
            <?php
               echo "<ul>FLAT NO: &nbsp". $res["fno"]. "</ul>";
                echo "<ul>HEAD NAME: &nbsp". $res["head_name"]. "</ul>";
                echo "<ul>Number of members: &nbsp". $res["mem_no"]. "</ul>";
                echo "<ul>TENANT ID: &nbsp". $res["tid"]. "</ul>";
            
                echo "<ul>CONTACT NO: &nbsp". $res["phno"]. "</ul>";
               echo "<ul>TYPE: &nbsp". $res["type"]. "</ul>";
            
            
               
            ?>
            
           </div>
            
        </div>
    </body>
</html>
