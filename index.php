<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1>
        <form name="form" action="login.php" method="POST" onsubmit="return isvalid()">
            <label for="">Username: </label>
            <input type="text" name="user" id="user"><br><br>
            <label for="">Password</label>
            <input type="password" name="pass" id="pass"><br><br>
            <input type="submit" id="btn" value="Login" name="submit">
        </form>
    </div>

    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;

            if(user.length =="" && pass.length == ""){
                alert("Username and password field is empty");
                return false;
            }
            else{
                
            }
        }
    </script>
</body>
</html>