<!DOCTYPE html>

<html>

    
    
    <head> 
        <meta charset="UTF-8">
        <title>GET NUMBER</title>
    </head>

    
    
    <style> 
body {text-align: center;}
    </style>

    
<body background="image4.jpg">
    
    <h1 style="color: white;">GET SENSOR VALUE FROM THE USER</h1> 
    
    <form action="conn.php" method="GET">

        
    <h4>Enter the number:</h4> <input type="number" step="1" pattern="^[-/d]/d*$" name="valueR" required>
    <input type="submit" name="send" value="send">
    
        
    </form>

    
</body>

    
   
</html>
