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
    <title>Private Dining</title>

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
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Menu <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="menu.html">All</a>
                            <a href="">New</a>
                            <a href="">Espresso Based</a>
                            <a href="">Frappe Series</a>
                            <a href="">Coolers</a>
                            <a href="">Pasta & Snacks</a>
                            <a href="">Waffles</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Services <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="services.php">Private Dining</a>
                            <a href="reserve.php">Table Reservation</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">About <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="philosophy.html">Our Philosophy</a>
                            <a href="whychooseus.html">Why Choose Us?</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Contact <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="contact.php">Contact Form</a>
                            <a href="feedback.php">Feedback & Suggestion</a>
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
            <h3>Private Dining</h3>
            <p>Have An Upcoming Special Event?</p>
        </div>
        <!-- <div class="box-3">
        <center><a href="//grab.onelink.me/2695613898?pid=inappsharing&c=2-" class="link-btn"
                style="color: white;">Book now!</a></center>
    </div> -->
    </section>

    <!-- newsletter section ends -->


    <!-- blogs section starts  -->

    <section class="blogs-2" id="blogs-2">

        <h1 class="heading">3 hours for only 3,000 PHP (Consumables)</h1>

        <div class="box-container container">

            <div class="box">
                <div class="image">
                    <img src="images/private-1.jpg" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/private-2.jpg" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/private-3.jpg" alt="">
                </div>
            </div>

        </div>

    </section>

    <!-- blogs section ends -->


    <!-- contact section starts  -->

    <section class="contact-2" id="contact-2">
        <div class="container">
            <div class="container">
                <h1 class="heading">Book Now!</h1>

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="images/service-1.jpg" class="w-100" alt="">
                        <img src="images/service-2.jpg" class="w-100" alt="">
                    </div>

                    <form action="" method="POST" class="col-md-6">
                        <br>
                        <h4><strong>Personal Information</strong></h4><br>
                        <label for="fname" id="fname">First Name<span style="color: red;">*</span></label>
                        <input type="text" id="fname" name="fname" placeholder="Enter First Name" class="box">

                        <label for="lname" id="lname">Last Name<span style="color: red;">*</span></label>
                        <input type="text" id="lname" name="lname" placeholder="Enter Last Name" class="box">

                        <label for="email" id="email">Email Address<span style="color: red;">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" class="box">

                        <label for="phone" id="phone">Phone Number<span style="color: red;">*</span></label>
                        <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" class="box">


                        <br><br><br>
                        <h4><strong>Reservation Details</strong></h4><br>
                        <label for="guests" id="guests">Number of Guests<span style="color: red;">*</span></label>
                        <select class="box" id="guests" name="guests">
                            <option value="guests" selected disabled>Number of Guests</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>

                        <label for="date" id="date">Date of Reservation<span style="color: red;">*</span></label>
                        <input type="date" name="date" id="date" class="box" value="mm/dd/yyyy" min="<?= date('Y-m-d') ?>">
                        <script>
                            // Clear the date input value on focus
                            document.getElementById("date").addEventListener("focus", function() {
                                if (this.value === "mm/dd/yyyy") {
                                    this.value = "";
                                }
                            });

                            // Restore the date input value if empty on blur
                            document.getElementById("date").addEventListener("blur", function() {
                                if (this.value === "") {
                                    this.value = "mm/dd/yyyy";
                                }
                            });
                        </script>

                        <label for="time" id="time">Time of Reservation<span style="color: red;">*</span></label>
                        <input type="time" name="time" id="time" class="box" value="HH:MM AM/PM" step="60">


                        <label for="others" id="others">Others</label>
                        <input type="text" id="others" name="others" placeholder="If Other Above, please specify" class="box">

                        <label for="request" id="request">Special Requests</label>
                        <textarea name="request" placeholder="Special Requests" class="box" id="request" cols="30" rows="10"></textarea>
                        <div>
                            <input type="submit" id="submit" name="submit" value="Submit" class="link-btn">
                        </div>
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

        $guests = $_POST['guests'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        if (empty($_POST['others'])) {
            $others = "N/A";
        } else {
            $others = $_POST['others'];
        }
        if (empty($_POST['request'])) {
            $request = "N/A";
        } else {
            $request = $_POST['request'];
        }

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
            $mail->Subject = 'RE: Request for Private Dining Reservation';
            $mail->Body = "
                <html>
                    <head>
                        <style>
                            body {
                                font-family: Times New Roman, serif;
                                font-size: 16px;
                                line-height: 1.5;
                                color: #444;
                            }
                        </style>
                    </head>
                    <body>
                        <p>
                            <img src='https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/297093510_102326959250266_2873349104751521933_n.png?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFfVXN5aNfVNIj0WBlWcP6dJHW-nmpeiGckdb6eal6IZwvxTaATQTjxWTsHa1phRMW5ydQykwzoPat_kb2MvEgK&_nc_ohc=EyyZUI6VNIMAX9ReSpo&_nc_zt=23&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfCp-ShLPigb4bJMk0UeXKaOXYLkoyHAS9_cubMBp_uxCw&oe=6443E79F' alt='Cafe Allegra Logo' style='width: 150px; height: auto; display: block; margin-bottom: 10px;'>
                        </p>
                        <h1 style='font-size: 24px; font-family: Georgia, serif; color: #444;'>Dear $fname $lname,</h1>
                        <p>
                            Thank you for considering Cafe Allegra for your private dining needs. We have received your inquiry and appreciate your interest in our services.
                        </p>
                        <p>
                            Our team will review your reservation details and respond to your concerns as soon as possible. Should you have any additional questions or require further assistance, please do not hesitate to contact us.
                        </p>
                        <p>
                            We look forward to providing you and your guests with an unforgettable private dining experience.
                        </p>
            
                        <p>
                            Sincerely,
                        </p>
            
                        <p>
                            The Cafe Allegra Team
                        </p>
                    </body>
                </html>
            ";

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

            $mailToCafe->Subject = "Private Dining Reservation";
            $mailToCafe->Body = "
            <p>
                <img src='https://scontent.fmnl9-2.fna.fbcdn.net/v/t39.30808-6/297093510_102326959250266_2873349104751521933_n.png?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFfVXN5aNfVNIj0WBlWcP6dJHW-nmpeiGckdb6eal6IZwvxTaATQTjxWTsHa1phRMW5ydQykwzoPat_kb2MvEgK&_nc_ohc=EyyZUI6VNIMAX9ReSpo&_nc_zt=23&_nc_ht=scontent.fmnl9-2.fna&oh=00_AfCp-ShLPigb4bJMk0UeXKaOXYLkoyHAS9_cubMBp_uxCw&oe=6443E79F' alt='Cafe Allegra Logo' style='width: 150px; height: 900%; display: block; margin-bottom: 10px;'>
            </p>
            <h1 style='font-size: 20px; font-family: Arial, sans-serif; color: #444;'>Private Dining Reservation from $fname $lname</h1>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Email:</strong> $email</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Phone:</strong> $phone</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Date:</strong> " . date("F j, Y", strtotime($date)) . "</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Time:</strong> " . date("h:i A", strtotime($time)) . "</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Number of Guests:</strong> $guests</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Others:</strong><br>$others</p>
            <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Special Requests:</strong><br>$request</p>
        ";



            $mailToCafe->send();

            echo '<div style="text-align: center;">
            <div class="banner">
                <div class="banner__content">
                    <div class="banner__text">
                        Thank you, we have received your private dining reservation.<br>Our team will respond to your request soon.
                    </div>
                    <button class="banner__close" type="button">
                        <span class="material-icons">
                            close
                        </span>
                    </button>
                </div>
            </div>
        </div>';
        } catch (Exception $e) {
            echo 'Error sending email: ', $mail->ErrorInfo;
        }
    }
    ?>
    <!-- footer section starts  -->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p style="font-size: 14px;"><em>781 B.S Aquino Ave. Brgy. Bagong Nayon, Baliuag, Bulacan (In front
                            of New Frontier Subdivision)</em></p>
                    <p style="font-size: 14px;">Phone: 0969 622 9438</p>
                    <p style="font-size: 14px;">Email: cafeallegrabaliuag@gmail.com</p>
                </div>
                <br><br><br><br><br><br>
                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0">
                    <a href="" class="logo"><img src="images/logo-brown.png" alt=""></a>
                    <div class="share">
                        <a href="https://www.facebook.com/cafeallegrabaliuag" class="fab fa-facebook-f"></a>
                        <a href="https://www.instagram.com/cafeallegra.ph/" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-twitter"></a><br><br><br>
                        <p style="font-size: 14px;">© 2022 Cafe Allegra | All Rights Reserved <br><em style="font-size: 12px;">Designed and Developed by J. Santiago</em></p>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0">

                    <h4 class="footer-title"><strong>Our Delivery Partners</strong></h4><br>
                    <div class="delivery-partners">
                        <a href="https://food.grab.com/ph/en/restaurant/cafe-allegra-baliuag-delivery/2-C3VFCPTUAGJTSA"><img src="images/grabfood.png" alt="GrabFood" style="width: 20%;"></a>
                        <a href="https://app.ordermo.ph/Cafe-Allegra"><img src="images/ordermo.png" alt="Ordermo" style="width: 20%;"></a>
                    </div>
                </div>
            </div>
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