<?php
session_start();
$username="";
$email="";
$errors=array();

$db= mysqli_connect('localhost', 'root', '', 'dancersdb') or die ("Could not connect to database");
$username= mysqli_real_escape_string($db, $_POST['username']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['password']);
$confirm=mysqli_real_escape_string($db, $_POST['confirm']);
$phone=mysqli_real_escape_string($db, $_POST['phone']);
if(empty($username)) {array_push($errors, "Username is required")};
if(empty($email)) (array_push($errors, "Email is required"));
if (empty($phone)) (array_push($errors, "Phone Number is required"));
if (empty($password)) (array_push($errors, "Password is required"));
if($password !=$confirm) (array_push($errors, "Password does not match"));


$dancersdb_check_query= "SELECT * FROM dancers WHERE username='$username' or email='$email' LIMIT 1";
$results= mysqli_query($db, $dancersdb_check_query);
$dancersbd=mysqli_fetch_assoc($results);
if($dancersbd){
    if($dancersbd ['username']===$username) (array_push($errors, "Username already exist"));
    if($dancersbd ['email']===$email) (array_push($errors, "This email id has a user registered"));
}

if(count($errors)==0){
    $password= md5($password);
    $query="INSERT INTO dancers(username, password, email, phone) VALUES('$username', '$password', '$email', '$phone')";
    mysqli_query($db, $query);
    $_SESSION['username']= $username;
    $_SESSION['success']="You are now one of PUEA dancer school";
    header('location:index.php');
}


if(isset($_POST['login_user'])){
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    if(empty($username)){
        array_push($errors, "Username is required");
    }
    if(empty($password)){
        array_push($errors, "Password is required");
    }
    if(count($errors) ==0){
        $password=md5($password);
        $query= "SELECT * FROM dancers WHERE username= '$username' AND password='$password'";
        $results=mysqli_query($db, $query);
        if(mysqli_num_rows($results)){
            $_SESSION['username']=$username;
            $_SESSION['success']="Login successfully";
            header('location:index.php');

        }else{
            array_push($errors, wrong username/password combination. Please try again);
        }
    }
}
?>