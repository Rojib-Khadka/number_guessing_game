
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="dbhtml.php" method="post">
        <h2>Welcome to Latgram</h2>
        username:<br>
        <input type="text" name="user" id="user" required><br>
        password:<br>
        <input type="password" name="pass" id="pass" required><br><br>
        <input type="submit" name="submit" value="register">




    </form>


    
</body>
</html>
<?php
include("db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
    $sql="INSERT INTO users(user,password)
    VALUES('$username','$password')";
    try{
        mysqli_query($conn,$sql);
        echo"You are now registerd";
    }
    catch(mysqli_sql_exception $e){
        echo"that usernmae is taken";
    }
}
mysqli_close($conn);

?>