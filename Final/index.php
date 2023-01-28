<?php
 /*
    session_start();
    if(!isset($_SESSION["username"])) {
        $_SESSION['msg']= "You must login to view this page";
        header("Location: login.php");
    }
    if(isset($_GET['logout'])){
        session_destroy();
        usset($_SESSION['username']);
        header("Location: login.php");
        
    }
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=wrap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    
    <title>PUEA DANCERS SCHOOL</title>
</head>
<body>
   
    <header>
        
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#dancers">Dancers</a></li>
                <li><a href="#contacts">Contacts</a></li>
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="login.php">Admin</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="dancerlogin.php">Login</a></li>
            </ul>
        </nav>
        <div id="login" class="fas fa-user-circle">             
            </div>
        
    </header>



    <script src="/js/script.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    <section class="home" id="home">
        <h1>The passion of dancing</h1>
        <p>A place for allowing better viewing of dancers information and 
            exposing local dancers to earning environment.
            Any dance crew can register on this application</p>
            <a href="#schedule"> <button class="btn">get started</button></a>
            <div class="shape"></div>

    </section>

    <section class="about" id="about">
        <div class="image">
            <img src="images/d1.jpg" alt="">
        </div>
        <div class="content">
            <h3>Why choose us?</h3>
            <p>In this web-based system, it will be able to present viewer 
                all related information about the school as a normal website in the internet.
            </p>
            <p> At the same time allows management task to be done the system
                The system will not only provide a good marketing tool but also as 
                good management tool. The system will cater all the requirements required by PUEA Dance school
             </p>
             <a href="#"><button class="btn">learn more</button></a>

        </div>

    </section>

    <section class="dancers" id="dancers">
        <h1 class="heading">Our popular dances</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/d1.jpg" alt="">
                <h3 class="train">Learn</h3>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="title">Learn from PUEA dancers</a>
                    <p>Welcome to PUEA dancing school. We train and meet our client desires.
                        The application is going to reduce cost and time wastage for clients.
                        This application is going to expose local dancers to earning environment.
                        </p>
                        <div class="info">
                            <h3> <i class="far fa-clock"></i>2 hours</h3>
                            <h3> <i class="far fa-calender-alt"></i>Any period</h3>
                            <h3> <i class="far fa-book"></i>Music styles</h3>
                        </div>
                </div>
            </div>

            <div class="box">
                <img src="images/d3.jpg" alt="">
                <h3 class="train">Learn</h3>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="title">Learn from PUEA dancers</a>
                    <p>Welcome to PUEA dancing school. We train and meet our client desires.
                        The application is going to reduce cost and time wastage for clients.
                        This application is going to expose local dancers to earning environment.
                        </p>
                        <div class="info">
                            <h3> <i class="far fa-clock"></i>2 hours</h3>
                            <h3> <i class="far fa-calender-alt"></i>Any period</h3>
                            <h3> <i class="far fa-book"></i>Music styles</h3>
                        </div>
                </div>
            </div>

            <div class="box">
                <img src="images/d4.jpg" alt="">
                <h3 class="train">Learn</h3>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="title">Learn from PUEA dancers</a>
                    <p>Welcome to PUEA dancing school. We train and meet our client desires.
                        The application is going to reduce cost and time wastage for clients.
                        This application is going to expose local dancers to earning environment.
                        </p>
                        <div class="info">
                            <h3> <i class="far fa-clock"></i>2 hours</h3>
                            <h3> <i class="far fa-calender-alt"></i>Any period</h3>
                            <h3> <i class="far fa-book"></i>Music styles</h3>
                        </div>
                </div>
            </div>

            <div class="box">
                <img src="images/d5.jpg" alt="">
                <h3 class="train">Learn</h3>
                <div class="content">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <a href="#" class="title">Learn from PUEA dancers</a>
                    <p>Welcome to PUEA dancing school. We train and meet our client desires.
                        The application is going to reduce cost and time wastage for clients.
                        This application is going to expose local dancers to earning environment.
                        </p>
                        <div class="info">
                            <h3> <i class="far fa-clock"></i>2 hours</h3>
                            <h3> <i class="far fa-calender-alt"></i>Any period</h3>
                            <h3> <i class="far fa-book"></i>Music styles</h3>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <h1 class="heading">Get Us</h1>
        <div class="row">
        <form action="index.php" method="post">
                <input type="text" placeholder="full names" class="box" name="names" required>
                <input type="email" placeholder="your email" class="box" name="email" required>
                <input type="tel" placeholder="your number" class="box"   name="phone" required>
                <textarea  cols="30" rows="10" class="box address" type="text" name="message" placeholder="your message..."  required></textarea>
                <button type="submit" name="submit" class="btn" onclick="thanks()">submit</button>
                
            </form>
            <div class="image">
                <img src="images/d2.jpg" alt="">
            </div>
        </div>

        <script>
            function thanks(){window.alert("Thank you for contacting PUEA DANCERS");}
        </script>
        <?php

session_start();



if (isset($_POST['submit']))
{
    require 'db.php';
    $name=($_POST['names']);
    $email= ($_POST['email']);
    $phone= ($_POST['phone']);
    $message= ($_POST['message']);
    extract($_POST);
    
    $sql ="INSERT INTO `getus`(`Names`, `email`, `number`, `message`) VALUES
                           ('$name','$email','$phone','$message')";
     mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
     $msg = "Thank you for contacting PUEA DANCERS";
     header("Location:index.php");

}
?>
    </section>

    <section style="align-items: center;width: 100%;background-color: grey;" class="schedule" id="schedule">
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
<h1 style="text-align: center;font-size:3em;">Practice Schedule</h1>
<table style="margin-top:20px; font-size:3em;border: 1px solid;width: 100%;">
    <tr style="color: aqua;">
      <th>Day</th>
      <th>Time</th>
    
    </tr>
    <tr>
      <td>Monday</td>
      <td>5:30- 7:00 PM</td>
      
    </tr>

    <tr>
        <td>Wednesday</td>
        <td>5:30- 7:00 PM</td>
        
      </tr>

      <tr>
        <td>Friday</td>
        <td>5:30- 7:00 PM</td>
        
      </tr>
    
  </table>

</section>

</body>
</html>