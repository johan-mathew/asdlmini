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
       <h1>View info</h1>
        <div>
        <form action="main-info.php" method="post">
                <label for="tid">Tenant ID</label>
                <input type="text" name="tid">
                <button type="submit">Submit</button>
            </form>
        </div>

            
    </body>
</html>