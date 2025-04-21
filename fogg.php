<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fogg.php" method="get">
        <label>Quantity</label><br>
        <input type="text" name="quantity"><br><br>
        <input type="submit" value="total">




    </form> 

</body>
</html>
<?php
$food="momo";
$price=140;
$quantity=$_GET["quantity"];
$total=null;
echo"You have ordered $quantity x {$food}s"  . "<br>";
$total=$quantity*$price;    
echo"Your total is $total";

?>