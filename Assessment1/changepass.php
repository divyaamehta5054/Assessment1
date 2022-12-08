<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Check</title>
</head>
<body>
   <form method="post">
    Enter your old password : <input type="password" name="pass" value="" placeholder="Enter Password" required/> <br>
    Enter your new password : <input type="password" name="pass1" value="" placeholder="Enter Password" required/> <br>
    <input type="submit" name="submit" value="Login"/>
</form> 
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $d=0;   
        $password = $_POST['pass']; 

        if($password == "123456")
        {
            $d = $_POST['pass1'];
            echo "password was changed";
            echo "<br>";
        }
        else
        {
            echo "Invalid Password";
        }
    }
    echo $d;

?>