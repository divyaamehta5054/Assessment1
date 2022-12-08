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
    Password : <input type="password" name="pass" value="" placeholder="Enter Password" required/>
    <input type="submit" name="submit" value="Login"/>
</form> 
</body>
</html>

<?php
    if(isset($_POST['submit']))
    {

        $password = $_POST['pass']; 

        if($password == "123456")
        {
            header('location:mainmenu.php');
        }
        else
        {
            echo "Invalid Password";
        }
    }
 ?>