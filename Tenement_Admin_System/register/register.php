<?php
include '..\config\confi.php';
$conn = OpenCon();
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="register.css">
        <title>
           Login
        </title>
    </head>
    
       
    
    <body>
        
        <div class="form">
           <h1>CASEGGIATO</h1>
           
            <form action="input.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username">
                <label for="password">Choose Password</label>
                <input type="password" name="password">
                <label for="gender">Gender  &nbsp;</label>   
                <select name="gender" id="gender">
                    <option value="m" selected>Male</option>
                    <option value="f">Female</option>
                </select>    
                <br>
                <br>  
                <label for="category"> Category  &nbsp;</label>
                <select name="category" id="category">
                    <option value="tenant" selected>Tenant</option>
                    <option value="manager">Manager</option>
                    <option value="staff">Staff</option>
                </select>  
                <button type="submit">REGISTER</button>
            </form>
            
            
        </div>
       
    </body>
</html>