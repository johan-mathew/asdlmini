<?php
session_start();
include '..\config\confi.php';
$conn = OpenCon();

        $name = $_SESSION['varname'];
        $sql= "select * from login where username='$name'"; 
    $result=mysqli_query($conn, $sql);
    $res= mysqli_fetch_assoc($result);
        $id=$res['tid'];

        $sql="select * from apartment where tid=$id";
$result=mysqli_query($conn, $sql);
$res= mysqli_fetch_assoc($result);
$_SESSION['pid'] = $id;
    ?>
  <html>
 <head>
     <link rel="stylesheet" href="style.css">
 </head>
    
    <body>
       
       
  

        
       <div class="split left">
       <h1 style="margin-left:10px;letter-spacing:10px;font-family:Verdana;">CASEGGIATO</h1>
       <div style="margin-top: 35%">
       
       <a class="button" href="user_bills.php">VIEW BILLS</a>
         <a style="margin-left: 10px;" class="button" href="user_visitor.php">VISITOR INFO</a>
         <br>
          <a class="button" style="margin-top:10px;" href="..\index.php">Logout</a>
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
        
    </body>
</html>