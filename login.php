<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Login page</title>
    <style>
    body{
    background-size: cover;
        margin: 150px 0;
      box-sizing: border-box;
    }
    input{
        
      padding: 8px 5px;
     margin: 10px;
     height: 20px;
     border-radius: 50px;
     border-color: red;
     font-family: 'Courier New', Courier, monospace;
    }    
</style>
   
</head>
<body background="8.jpg">
<center>
    <form action="y.php" method="post">
        <input type="text" name="user" placeholder="Add Name"><br>
        <input type="password" name="pass" placeholder="Password"><br>
<input type="submit" value="Login" name="submit" style="height:40px ;">
    <br><br><br><br>
</form>
</body>
</html>