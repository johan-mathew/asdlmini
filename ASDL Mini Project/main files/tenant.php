<html>
   <style>
        h1{
    text-align: center;
    letter-spacing: 10px;
    margin: 100px 0;
}
.form
{
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
input
{
    display: block;
    margin: 20px 0;
    width: 300px;
    padding: 10px;   
}
label
{
    font-size: 20px;
}

    </style>
    <body>
       
        <div>
        <h3>View Info</h3>
        <h4>Enter tenant id to view</h4>
        <form action="main-info.php" method="post">
                <label for="tid">Tenant ID</label>
                <input type="text" name="tid">
                <button type="submit">VIEW</button>
            </form>
        </div>
        
    </body>
</html>