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
    <title>Our Philosophy</title>

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
                </div>

            </div>

        </div>
    </header>

    <!-- header section ends    -->

    <!-- newsletter section starts  -->

    <section class="newsletter">
        <div class="container">
            <br><br><br><br><br>
            <?php
            $sql = "SELECT * FROM philosophy WHERE philosophy_id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $heading = $row['heading'];
                $subheading = $row['subheading'];
                $mission = $row['mission'];
                $vision = $row['vision'];
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
                        <img src="images/<?php echo $background_image?>" class="w-100" alt="">
                    </div>
                    <div class="col-md-6" style="text-align: center;">
                        <h4 class="title"><strong>Mission</strong></h4>
                        <p style="font-size: 16px;"><?php echo $mission?></p>
                        <br>
                        <h4 class="title"><strong>Vision</strong></h4>
                        <p style="font-size: 16px;"><?php echo $vision?></p>
                    </div>
                </div>

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