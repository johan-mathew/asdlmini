<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="login.css">
        <title>
           Login
        </title>
    </head>
 
    
    <body>
        <h1>CASEGGIATO</h1>
        <div class="form">
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