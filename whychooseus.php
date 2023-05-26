<?php
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
    $closing_time = $row['closing_time'];
    $seat_capacity = $row['seat_capacity'];
    $color_theme = $row['color_theme'];
    $google_map = $row['google_map'];
    $address_link = $row['address_link'];
    $facebook_link = $row['facebook_link'];
    $instagram_link = $row['instagram_link'];
    $twitter_link = $row['twitter_link'];
} else {
    echo " ";
}

include('css/dynamic_styles.php');
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

    <link rel="icon" href="images/<?php echo $logo_icon ?>" type="images" />
</head>

<body>

    <!-- header section starts     -->


    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center">

                <!-- <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a> -->
                <a href="index.php" class="logo mr-auto"><img src="images/<?php echo $logo_white ?>" alt=""></a>

                <nav class="nav">
                    <a href="index.php">Home</a>
                    <a href="menu.php">Menu</a>

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
                    <div id="login-btn" class="fas fa-user" style="display:none;"></div>
                </div>

            </div>

        </div>
    </header>

    <!-- login form starts -->

    <div class="login-form">

        <form action="">
            <div id="close-login-form" class="fas fa-times"></div>
            <a href="#" class="logo mr-auto"> <i class="fas fa-mug-hot"></i> coffee </a>
            <h3>let's start a new great day</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="password" name="" placeholder="enter your password" id="" class="box">
            <div class="flex">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">remember me</label>
                <a href="#">forgot password?</a>
            </div>
            <input type="submit" value="login now" class="link-btn">
            <p class="account">don't have an account? <a href="#">create one!</a></p>
        </form>

    </div>

    <!-- header section ends    -->

    <!-- newsletter section starts  -->

    <section class="newsletter">
        <div class="container">
            <br><br><br><br><br>
            <?php
            $sql = "SELECT * FROM whychooseus WHERE whychooseus_id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $heading = $row['heading'];
                $subheading = $row['subheading'];
                $title = $row['title'];
                $description = $row['description'];
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

    <!-- menu section starts  -->

    <section class="menu" id="menu">

        <!-- about section starts  -->

        <section class="about" id="about">

            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="images/<?php echo $background_image ?>" class="w-100" alt="">
                    </div>
                    <div class="col-md-6">
                        <h3 class="title"><?php echo $title ?></h3>
                        <p><?php echo $description ?></p>
                        <div class="icons-container">
                            <div class="icons">
                                <i class="fas fa-wifi"></i>
                                <h3><strong>FREE</strong> WiFi for customers</h3>
                            </div>
                            <div class="icons">
                                <i class="fas fa-car"></i>
                                <h3><strong>FREE</strong> Parking</h3>
                            </div>
                            <div class="icons">
                                <i class="fas fa-dog"></i>
                                <h3>Pet Friendly</h3>
                            </div>
                            <div class="icons">
                                <i class="fas fa-coffee"></i>
                                <h3>Cozy, fresh coffee</h3>
                            </div>

                            <div class="icons">
                                <i class="fas fa-comments"></i>
                                <h3>Friendly and attentive staff</h3>
                            </div>

                            <div class="icons">
                                <i class="fas fa-camera"></i>
                                <h3>Aesthetically Pleasing</h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="box-2">
                <center><a href="table.php" class="link-btn">Reserve your spot today!</a></center>
            </div>
        </section>

        <!-- about section ends -->

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <p style="font-size: 14px;"><em><?php echo $address ?></em></p>
                    <p style="font-size: 14px;">Phone: <a href="tel:<?php echo $phone ?>"><?php echo $phone ?></a></p>
                    <p style="font-size: 14px;">Email: <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
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
               <div class="delivery-partners">
                  <?php
                  $sql = "SELECT * FROM delivery_partners WHERE status = 'active'";
                  $result = mysqli_query($conn, $sql);
                  $numRows = mysqli_num_rows($result);

                  if ($numRows > 0) {
                  ?>
                     <h4 class="footer-title"><strong>Our Delivery Partners</strong></h4><br>
                     <?php
                     while ($row = mysqli_fetch_assoc($result)) {
                     ?>

                        <a href="<?php echo $row['partner_link'] ?>"><img src="images/<?php echo $row['partner_photo'] ?>" alt="<?php echo $row['partner_name'] ?>" style="width: 20%;"></a>
                  <?php
                     }
                  } else {
                     echo "";
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