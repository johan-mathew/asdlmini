<html>
    <head>
        <link rel="stylesheet" href="form.css">
   
    </head>
    <body>
        <form method="post" action="insert_bill.php">
                            <label for="tid">Tenant Id </label>
                <input type="text" name="tid"><br>
                <label for="water">Enter Water Bill</label>   
                <input type="text" name="water"><br>
                <label for="electricity">Enter Electricity Bill Cost</label>
                <input type="text" name="electricity"><br>
                <label for="maintanence">Enter Maintanence Cost</label>   
                <input type="text" name="maintanence">
                <label for="lpg">Enter Lpg Cost  </label>   
                <input type="text" name="lpg">
                
                <button type="submit">Add</button>
            
        </form>
    </body>
</html>