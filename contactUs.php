<?php

$conn = mysqli_connect('localhost', 'root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if($insert){
        $message[] = 'appointment made succefully!';
    }else{
        $message[] = 'appointment failed';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/homepageStyle.css">
<link rel="stylesheet" href="css/contactUsStyle.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</head>
<body class="homepageBG">

<!-- Header starts here -->
<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-auto">
                <a href="homepage.html" class="logo"><i class="fas fa-tooth"></i>Medrano <span>Dental</span> Clinic</a>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <nav class="nav">
                    <a href="homepage.html">Home</a>
                    <a href="service.html">Services</a>
                    <a href="feedback.html">Feedback</a>
                    <a href="aboutUs.html">About us</a>
                    <a href="contactUs.php">Contact us</a>
                </nav>
                <a href="contactUs.php" class="link-btn">Make Appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </div>
</header>
<!-- Header ends here -->

<!-- Contact us starts here -->
<section class="contactUs-section">
    <div class="container">
        <div class="contactUs-card mx-auto">
            <!-- Left Info -->
            <div class="contactUs-info">
                <div>
                    <h1>Set an appointment.</h1>
                    <div class="contact-detail">
                        <div class="contact-label mb-1">Phone</div>
                        <div class="contact-value">+63 995 380 2010</div>
                    </div>
                    <div class="contact-detail">
                        <div class="contact-label mb-1">Email</div>
                        <div class="contact-value">docjmedrano@yahoo.com</div>
                    </div>
                </div>
            </div>
            <!-- Right Form & Image -->
            <div class="contactUs-form-wrap">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <?php
                        if (isset($message)){
                            foreach($message as $message){
                            echo '<p class="message">'. $message .'</p>';
                            }
                        }
                    ?>
                    <span>Your name :</span>
                    <input type="text" name="name" placeholder="enter your name"class="box" required>
                    <span>Your email :</span>
                    <input type="email" name="email" placeholder="enter your email"class="box" required>
                    <span>Your number :</span>
                    <input type="number" name="number" placeholder="enter your number"class="box" required>
                    <span>Appointment date :</span>
                    <input type="datetime-local" name="date" class="box" required>
                    <input type="submit" value="make appointment" name="submit" class="link-btn">
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact us ends here -->

<script src="js/script.js"></script>
</body>
</html>