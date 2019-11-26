<html>
    <head>
        <link rel="stylesheet" href="form.css">
   
    </head>
    <body>
        <form method="post" action="insert_visit.php">
                            <label for="vname">Visitor Name</label>
                <input type="text" name="vname"><br>
                <label for="phno">Phone Number</label>
                <input type="text" name="phno"><br>
                <label for="time_in">Time_IN  </label>   
                <input type="text" name="time_in"><br>
                <label for="time_out">Time_Out  </label>
                <input type="text" name="time_out"><br>
                <label for="date">Date</label>   
                <input type="text" name="date">
                <label for="fno">Flat number  </label>   
                <input type="text" name="fno">
                <label for="purpose">Purpose  </label>   
                <input type="text" name="purpose">
                <label for="tid">Tenant id  </label>   
                <input type="text" name="tid">
                <br>
                
                <button type="submit">Add</button>
            
        </form>
    </body>
</html>