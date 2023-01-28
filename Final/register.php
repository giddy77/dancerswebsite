<?php

session_start();



if (isset($_POST['register']))
{
    require 'db.php';
    $username=($_POST['username']);
    $password=($_POST['password']);
    $email= ($_POST['email']);
    $phone= ($_POST['phone']);
    extract($_POST);
    
    $sql ="INSERT INTO `dancers` (`username`, `password`, `email`, `phone`) VALUES
                           ('$username','$password','$email','$phone')";
     mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
     $msg = "Registered Successfully";
     header("Location:dancerlogin.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Register</title>
</head>
<body>
    <div class="login-form">
        <form action="register.php" method="post">
            <h3>Register as new Dancer</h3>
            <label for="username">Username</label>
            <input type="username" name="username" class="box" required>
            <label for="password">Password</label>
            <input type="password" name="password" class="box" required>
            <label for="email">Email</label>
            <input type="email" name="email" class="box" required>
            <label for="number">Phone Number</label>
            <input type="number" name="phone" class="box" required>
            <input type="submit" class="btn" value="register" name="register">
        </form>
    </div>

</body>
</html>