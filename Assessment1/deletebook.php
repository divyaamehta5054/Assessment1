<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1> Enter the Information Below </h1>
    <form  method="post">
    <table>
        <tr>
            <td> Enter the book id to delete : </td>
            <td> <input type="text" name="t1" value="" required/> </td>
        </tr>
        <tr>
            <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"/> </td>
        </tr>
    </table>
    </form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    echo "your book is deleted";
}

?>