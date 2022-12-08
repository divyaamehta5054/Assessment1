
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
            <td> Category : </td>
            <td> <input type="text" name="t1" value="" required/> </td>
        </tr>
        <tr>
            <td> Book ID : </td>
            <td> <input type="text" name="t2" value="" required/> </td>
        </tr>
        <tr>
            <td> Book Name : </td>
            <td> <input type="text" name="t3" value="" required/> </td>
        </tr>
        <tr>
            <td> Author : </td>
            <td> <input type="text" name="t4" value="" required/> </td>
        </tr>
        <tr>
            <td> Quantity : </td>
            <td> <input type="text" name="t5" value="" required/> </td>
        </tr>
        <tr>
            <td> Price : </td>
            <td> <input type="text" name="t6" value="" required/> </td>
        </tr> 
        <tr>
            <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"/> </td>
        </tr>  
    </table>
</body>
</html>
</form>



<?php

if(isset($_POST['submit']))
{
    
    // header('location:viewbook.php');
    
    $category = $_POST['t1'];
    $bookid = $_POST['t2'];
    $bookname = $_POST['t3'];
    $author = $_POST['t4'];
    $quantity = $_POST['t5'];
    $price = $_POST['t6'];

    $data = array($category,$bookid,$bookname,$author,$quantity,$price);
    $arraydata = implode('  ',$data);
    print_r($arraydata);
    exit;   
}

?>


