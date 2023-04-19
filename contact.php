<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="images/logo-icon.png" type="images" />

    <!-- bannner  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <!-- header section starts     -->

    <header class="header fixed-top">

        <div class="container">

            <div class="row align-items-center">

                <!-- <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a> -->
                <a href="index.html" class="logo mr-auto"><img src="images/logo.png" alt=""></a>

                <nav class="nav">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                    <!-- <a href="menu.html">Menu</a> -->
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Menu <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="menu.html">All</a>
                            <a href="">Espresso Based</a>
                            <a href="">Frappe Series</a>
                            <a href="">Pasta & Snacks</a>
                            <a href="">Coolers</a>
                            <a href="">Waffle</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Contact <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="contact.php">Contact Form</a>
                            <a href="feedback.php">Feedback & Suggestion</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Services <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="services.html">Private Dining</a>
                            <a href="reserve.html">Table Reservation</a>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script src="scripts.js"></script>
                </nav>

                <div class="icons">
                    <div id="menu-btn" class="fas fa-bars"></div>
                    <div id="login-btn" class="fas fa-user"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- login form starts -->

    <div class="login-form">

        <form action="">
            <div id="close-login-form" class="fas fa-times"></div>
            <a href="#" class="logo mr-auto"><img src="images/logo-brown.png" alt=""></a>
            <h3>let's start a new great day!</h3>
            <input type="email" name="" placeholder="Enter Username" id="" class="box">
            <input type="password" name="" placeholder="Enter Password" id="" class="box">
            <div class="flex">
                <!-- <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label> -->
                <a href="#">Forgot password?</a>
            </div>
            <input type="submit" value="Login" class="link-btn">
            <!-- <p class="account">don't have an account? <a href="#">create one!</a></p> -->
        </form>

    </div>

    <!-- login form ends -->

    <!-- header section ends    -->


    <!-- newsletter section starts  -->

    <section class="newsletter">
        <div class="container">
            <br><br><br><br><br>
            <h3>Contact Us</h3>
            <p>Let us know how we can serve you.</p>
        </div>
    </section>

    <!-- newsletter section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <div class="container">

            <div class="contact-info-container">

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <h3>phone</h3>
                    <p>+63 969 622 9438</p>
                </div>

                <div class="box">
                    <i class="fas fa-map"></i>
                    <h3>address</h3>
                    <p>781 Benigno S. Aquino Ave. Brgy. Bagong Nayon (In front of New Frontier Subdivision), Baliuag,
                        Philippines, 3006</p>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <h3>email</h3>
                    <p>cafeallegrabaliuag@gmail.com</p>
                </div>

            </div>

            <div class="row align-items-center">

                <div class="col-md-6 mb-5 mb-md-0 ">
                    <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d963.6464479118739!2d120.89822424377084!3d14.960152777501325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339701f2dfa15023%3A0x2ae26381c4a9af6b!2sCafe%20Allegra!5e0!3m2!1sen!2sph!4v1681242204750!5m2!1sen!2sph" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <form action="" method="POST" class="col-md-6">
                    <h3>get in touch</h3>
                    <label for="fname" id="fname">First Name<span style="color: red;">*</span></label>
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" class="box" required>

                    <label for="lname" id="lname">Last Name<span style="color: red;">*</span></label>
                    <input type="text" id="lname" name="lname" placeholder="Enter Last Name" class="box">

                    <label for="email" id="email">Email Address<span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Address" class="box">

                    <label for="phone" id="phone">Phone Number</span></label>
                    <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="box">

                    <label for="message" id="message">Message<span style="color: red;">*</label>
                    <textarea name="message" itemid="message" placeholder="Enter Message" class="box" id="" cols="30" rows="10"></textarea>

                    <input type="submit" id="submit" name="submit" value="Send Message" class="link-btn">
                </form>

            </div>

        </div>

    </section>

    <!-- contact section ends -->
    <?php

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mail = new PHPMailer(true);

        try {
            // Customer email
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'jeanherlinesantiago0329@gmail.com';
            $mail->Password = 'fkryponqryuezjte';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('noreply@cafeallegra.com', 'Cafe Allegra');
            $mail->addAddress($email);
            $mail->addCustomHeader('X-Priority', '1');
            $mail->addCustomHeader('Importance', 'High');

            $mail->isHTML(true);
            $mail->Subject = 'Regarding Your Concern';
            $mail->Body = "
        <p>
        <img src='https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/297093510_102326959250266_2873349104751521933_n.png?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFfVXN5aNfVNIj0WBlWcP6dJHW-nmpeiGckdb6eal6IZwvxTaATQTjxWTsHa1phRMW5ydQykwzoPat_kb2MvEgK&_nc_ohc=EyyZUI6VNIMAX9ReSpo&_nc_zt=23&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfCp-ShLPigb4bJMk0UeXKaOXYLkoyHAS9_cubMBp_uxCw&oe=6443E79F' alt='Cafe Allegra Logo' style='width: 150px; height: auto; display: block; margin-bottom: 10px;'>
        </p>
        <h1 style='font-size: 20px; font-family: Arial, sans-serif; color: #444;'>Dear $fname $lname,</h1>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'>
            Thank you for contacting Cafe Allegra. We have received your inquiry and appreciate your interest in our services.
        </p>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'>
            Our team will review your message and respond to your concerns as soon as possible. Should you have any additional questions or require further assistance, please do not hesitate to contact us.
        </p>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'>
            Sincerely,
        </p>
    
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'>
            The Cafe Allegra Team
        </p>";

            $mail->send();

            // Cafe Allegra email
            $mailToCafe = new PHPMailer(true);

            $mailToCafe->isSMTP();
            $mailToCafe->Host = 'smtp.gmail.com';
            $mailToCafe->SMTPAuth = true;
            $mailToCafe->Username = 'jeanherlinesantiago0329@gmail.com';
            $mailToCafe->Password = 'fkryponqryuezjte';
            $mailToCafe->SMTPSecure = 'tls';
            $mailToCafe->Port = 587;

            $mailToCafe->setFrom($email, 'Cafe Allegra Website');
            $mailToCafe->addAddress('jeanherlinesantiago0329@gmail.com'); // Replace with Cafe Allegra's email address
            $mailToCafe->isHTML(true);

            $mailToCafe->Subject = "New Customer Inquiry from $fname $lname";
            $mailToCafe->Body = "
        <p>
        <img src='https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/297093510_102326959250266_2873349104751521933_n.png?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFfVXN5aNfVNIj0WBlWcP6dJHW-nmpeiGckdb6eal6IZwvxTaATQTjxWTsHa1phRMW5ydQykwzoPat_kb2MvEgK&_nc_ohc=EyyZUI6VNIMAX9ReSpo&_nc_zt=23&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfCp-ShLPigb4bJMk0UeXKaOXYLkoyHAS9_cubMBp_uxCw&oe=6443E79F' alt='Cafe Allegra Logo' style='width: 150px; height: auto; display: block; margin-bottom: 10px;'>
        </p>
        <h1 style='font-size: 20px; font-family: Arial, sans-serif; color: #444;'>New Inquiry from $fname $lname</h1>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Email:</strong> $email</p>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Phone:</strong> $phone</p>
        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Message:</strong><br>$message</p>";

            $mailToCafe->send();

            echo '   <div class="banner">
        <div class="banner__content">
            <div class="banner__text">
            Thank you, we have received your inquiry/request/message.
            </div>
            <button class="banner__close" type="button">
                <span class="material-icons">
                    close
                </span>
            </button>
        </div>
    </div>';
        } catch (Exception $e) {
            echo 'Error sending email: ', $mail->ErrorInfo;
        }
    }
    ?>
    <!-- footer section starts  -->

    <section class="footer container">

        <a href="" class="logo"></i><img src="images/logo-brown.png" alt=""> </a>
        <div class="share">
            <a href="https://www.facebook.com/cafeallegrabaliuag" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/cafeallegra.ph/" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-twitter"></a>
        </div>

    </section>

    <!-- footer section ends -->
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Click event for the dropdown button
            $(document).on('click', '.custom-dropdown .dropbtn', function(event) {
                event.stopPropagation();
                $(this).siblings('.dropdown-content').toggle();
            });

            // Click event for anywhere else on the document
            $(document).on('click', function() {
                $('.dropdown-content').hide();
            });
        });
    </script>
</body>

</html>