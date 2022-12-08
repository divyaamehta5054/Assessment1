<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Category For Book</title>
</head>
<body>
    <form method="post">
    <h1> Select Category </h1>
    <ol>
        <li> Computer </li>
        <li> Electronics </li>
        <li> Electrical </li>
        <li> Civil </li>
        <li> Mechanical </li>
        <li> Architecture </li>
        <li> Back to main menu </li>
        <hr size="1">
        Enter your choice: <input type="text" name="choice" value="" placeholder="Enter Your Choice in number" required/>
        <input type="submit" name="submit" value="Enter"/>
    </ol>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    header('location:editbook.php');
}

?>