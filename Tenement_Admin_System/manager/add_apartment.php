<html>
    <head>
        <link rel="stylesheet" href="..\css\form.css">
   
    </head>
    <body>
        <form method="post" action="insert_apartment.php">
                            <label for="fno">Flat Number</label>
                <input type="text" name="fno"><br>
                <label for="head_name">Head Name  </label>   
                <input type="text" name="head_name"><br>
                <label for="mem_no">Number of members  </label>
                <input type="text" name="mem_no"><br>
                <label for="type">Type</label>   
                <input type="text" name="type">
                <label for="phno">Phone Number  </label>   
                <input type="text" name="phno">
                <label for="gender">Gender  </label>   
                <input type="text" name="gender">
                <label for="tid">Tenant id  </label>   
                <input type="text" name="tid">
                <br>
                
                <button type="submit">Add</button>
            
        </form>
    </body>
</html>