<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
</head>
<body>
    <form method="post">
    <h1> Main Menu </h1>
    <ol>
        <li> Add Books </li>
        <li> Delete Book </li>
        <li> Search Book </li>
        <li> View Book List </li>
        <li> Edit Book Record </li>
        <li> Change Password </li>
        <li> Close Application </li>
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
    $ch = $_POST['choice'];
    switch($ch)
    {
        case 1: 
            header('location:category.php');
            break;
        case 2: 
                header('location:deletebook.php');
                break;
        case 3: 
                header('location:viewbook.php');
                break;
        default:
                echo "Wrong Choice";
                break;
                                            
                

    }

}
?>