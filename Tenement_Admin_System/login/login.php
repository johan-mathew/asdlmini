<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="logins.css">
        <title>
           Login
        </title>
    </head>
 
    
    <body>
      
        
        <div class="form">
           <h1>CASEGGIATO</h1>
            <form action="verify.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username">
                <label for="password">Password</label>
                <input type="password" name="password">
                <button type="submit">LOGIN</button>
            </form>
        </div>
       
    </body>
</html>