<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <form action="login.php" method="post">
            <h3>Admin Login</h3>
            <input type="username" placeholder="username" name="username" class="box" required>
            <input type="password" placeholder="password" name="password" class="box" required>
            <p>Forgot password?<a href="#">Click here</a></p>
            <button type="submit" name="login_user" class="btn">Login</button>
           
        </form>
    </div>

</body>
</html>


<?php
require 'db.php';

    if (isset($_POST['login_user']))
{
    extract($_POST);
    $sql ="SELECT * FROM admin WHERE username= '$username' AND password='$password'";
    $results = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($results);
    if ($count == 1)
    {
        //success
        $user = mysqli_fetch_assoc($results);
	
        //sessions
        session_start();
        $_SESSION['username'] = $username;
        header('location:admin.php');
    }
    else {
      $error = "wrong username or password";
    }
}

/*
$sql ="INSERT INTO `admin` (`username`, `password`) VALUES
('$username','$password')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));
*/

?>