<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('db.php');

$sql = "SELECT * FROM company WHERE company_id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $company_year = $row['company_year'];
    $company_name = $row['company_name'];
    $logo_orig = $row['logo_orig'];
    $logo_white = $row['logo_white'];
    $logo_icon = $row['logo_icon'];
    $address = $row['address'];
    $phone = $row['phone'];
    $email = $row['email'];
    $storehours = $row['store_hours'];
    $google_map = $row['google_map'];
    $facebook_link = $row['facebook_link'];
    $instagram_link = $row['instagram_link'];
    $twitter_link = $row['twitter_link'];
} else {
    echo " ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback/Comment & Suggestion</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="images/<?php echo $logo_icon ?>" type="images" />

    <!-- feedback -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- bannner  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <!-- header section starts     -->

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center">

                <!-- <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a> -->
                <a href="index.php" class="logo mr-auto"><img src="images/logo.png" alt=""></a>

                <nav class="nav">
                    <a href="index.php">Home</a>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">Menu <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="menu.php">All</a>
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
                            <a href="dining.php">Private Dining</a>
                            <a href="table.php">Table Reservation</a>
                        </div>
                    </div>
                    <div class="dropdown custom-dropdown">
                        <a class="dropbtn">About <i class="fa fa-caret-down"></i></a>
                        <div class="dropdown-content">
                            <a href="philosophy.php">Our Philosophy</a>
                            <a href="whychooseus.php">Why Choose Us?</a>
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
            <a href="#" class="logo mr-auto"><img src="images/<?php echo $logo_orig ?>" alt=""></a>
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
            <?php
            $sql = "SELECT * FROM edit_feedback WHERE edit_feedback_id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $heading = $row['heading'];
                $subheading = $row['subheading'];
                $background_image = $row['background_image'];
            } else {
                echo " ";
            }
            ?>
            <h3><?php echo $heading ?></h3>
            <p><?php echo $subheading ?></p>
        </div>
    </section>

    <!-- newsletter section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <div class="container">

            <div class="contact-info-container">
            </div>
            <div class="row align-items-center">

                <div class="col-md-6 mb-5 mb-md-0 ">
                    <div>
                        <img src="images/<?php echo $background_image ?>" class="w-100" alt="">
                    </div>
                </div>

                <form action="" method="POST" class="col-md-6">
                    <h3>Share Your Thoughts</h3>
                    <label for="fname" id="fname">First Name<span style="color: red;">*</span></label>
                    <input type="text" id="fname" name="fname" placeholder="Enter First Name" class="box" required>

                    <label for="lname" id="lname">Last Name<span style="color: red;">*</span></label>
                    <input type="text" id="lname" name="lname" placeholder="Enter Last Name" class="box">

                    <label for="email" id="email">Email Address<span style="color: red;">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Enter Email Address" class="box">

                    <label for="message" id="message">Feedback/Comment & Suggestion<span style="color: red;">*</label>
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
        $message = $_POST['message'];

        // prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO feedback (first_name, last_name, email, message, created_at) VALUES (?, ?, ?, ?, NOW())");

        // bind the parameters to the statement
        $stmt->bind_param("ssss", $fname, $lname, $email, $message);

        // execute the statement
        $stmt->execute();

        // close the statement and connection
        $stmt->close();
        $conn->close();

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
            $mail->Subject = 'RE: Regarding Your Feedback/Suggestion';
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
                        Thank you for sharing your feedback, comment and suggestion with Cafe Allegra. We appreciate your valuable insights and opinions.
                    </p>
                    <p>
                        Our team will review your message and take it into consideration as we strive to improve our services. Should you have any additional feedback, comments or suggestions, please do not hesitate to contact us.
                    </p>
                    <p>
                        Thank you again for your support and patronage.
                    </p>
            
                    <p>
                        Best regards,
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

            $mailToCafe->Subject = "Customer Feedback";
            $mailToCafe->Body = "
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
                        <h1 style='font-size: 20px; font-family: Arial, sans-serif; color: #444;'>Feedback from $fname $lname</h1>
                        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Email:</strong> $email</p>
                        <p style='font-size: 16px; font-family: Arial, sans-serif; color: #444;'><strong>Message:</strong><br>$message</p>
                    </body>
                </html>";

            $mailToCafe->send();

            echo '<div class="banner" style="text-align: center;">
            <div class="banner__content">
                <div class="banner__text">
                Thank you, we have received your feedback/suggestion.
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

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p style="font-size: 14px;"><em><?php echo $address ?></em></p>
                    <p style="font-size: 14px;">Phone: <?php echo $phone ?></p>
                    <p style="font-size: 14px;">Email: <?php echo $email ?></p>
                </div>
                <br><br><br><br><br><br>
                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0">
                    <a href="" class="logo"><img src="images/<?php echo $logo_orig ?>" alt=""></a>
                    <div class="share">
                        <a href="<?php echo $facebook_link ?>" class="fab fa-facebook-f"></a>
                        <a href="<?php echo $instagram_link ?>" class="fab fa-instagram"></a>
                        <a href="<?php echo $twitter_link ?>" class="fab fa-twitter"></a><br><br><br>
                        <p style="font-size: 14px;">© <?php echo $company_year . " " . $company_name ?> | All Rights Reserved <br><em style="font-size: 12px;">Developed by J. Santiago</em></p>
                    </div>
                </div>
                <br><br><br><br><br><br>
                <div class="col-md-4 col-sm-12 mb-4 mb-sm-0">

                    <h4 class="footer-title"><strong>Our Delivery Partners</strong></h4><br>
                    <div class="delivery-partners">
                        <?php
                        $sql = "SELECT * FROM delivery_partners";
                        $result = mysqli_query($conn, $sql);
                        $numRows = mysqli_num_rows($result);

                        if ($numRows > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <a href="<?php echo $row['partner_link'] ?>"><img src="images/<?php echo $row['partner_photo'] ?>" alt="<?php echo $row['partner_name'] ?>" style="width: 20%;"></a>
                        <?php
                            }
                        } else {
                            echo "No landing page content found.";
                        }
                        ?>
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