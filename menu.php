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
    <title>Menu</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bannner  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                            <a href="">Best Seller</a>
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
            $sql = "SELECT * FROM edit_menu WHERE edit_menu_id = 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $heading = $row['heading'];
                $subheading = $row['subheading'];
            } else {
                echo " ";
            }
            ?>
            <h3><?php echo $heading ?></h3>
            <p><?php echo $subheading ?></p>
            <div class="box-3">
                <center>
                    <?php
                    $sql = "SELECT * FROM delivery_partners";
                    $result = mysqli_query($conn, $sql);
                    $numRows = mysqli_num_rows($result);

                    if ($numRows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <a href="<?php echo $row['partner_link']; ?>" class="link-btn" style="color: white; margin-right: 10px;"><?php echo $row['partner_name']; ?></a>
                    <?php
                        }
                    } else {
                        echo "";
                    }
                    ?>
                </center>
            </div>

        </div>
    </section>

    <!-- newsletter section ends -->
    <div class="banner">
        <div class="banner__content">
            <div class="text-center">
                <div class="banner__text">
                    <strong>Store Hours - </strong><?php echo $storehours ?>&nbsp&nbsp
                </div>
            </div>

            <button class="banner__close" type="button">
                <span class="material-icons">
                    close
                </span>
            </button>
        </div>
    </div>
    <!-- menu section starts  -->

    <section class="menu" id="menu">
        <div class="filter-btns">
            <?php
            $sql = "SELECT * FROM category";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);

            if ($numRows > 0) {
                echo '<button type="button" class="filter-btn active-btn" id="all">All</button>';
                $firstCategory = true;
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($firstCategory) {
                        $firstCategory = false;
                    } else {
                        echo '<button type="button" class="filter-btn" id="' . $row['category_id'] . '">' . $row['category_name'] . '</button>';
                    }
                }
            }

            ?>
        </div>


        <script>
            // Add active class to selected category button and filter menu items
            var filterBtns = document.querySelectorAll('.filter-btn');
            var menuItems = document.querySelectorAll('.box');

            filterBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var categoryId = this.id;

                    // Remove active class from all buttons
                    filterBtns.forEach(function(btn) {
                        btn.classList.remove('active-btn');
                    });

                    // Add active class to selected button
                    this.classList.add('active-btn');

                    // Show menu items for selected category
                    if (categoryId == 'all') {
                        menuItems.forEach(function(item) {
                            item.style.display = 'block';
                        });
                    } else {
                        menuItems.forEach(function(item) {
                            item.style.display = 'none';
                        });

                        var categoryItems = document.querySelectorAll('.category-' + categoryId);
                        if (categoryItems.length > 0) {
                            categoryItems.forEach(function(item) {
                                item.style.display = 'block';
                            });
                        } else {
                            menuItems.forEach(function(item) {
                                item.style.display = 'block';
                            });
                        }
                    }
                });
            });
        </script>


        <section class="contact" id="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-5 mb-md-0 ">
                    </div>
                </div>
            </div>
        </section>

        <div class="container box-container">
            <?php
            $sql = "SELECT * FROM menu";
            $result = mysqli_query($conn, $sql);
            $numRows = mysqli_num_rows($result);

            if ($numRows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $menuCategory = $row['category'];
            ?>
                    <div class="box <?php echo 'category-' . $menuCategory; ?>">
                        <img src="images/menu/<?php echo $row['menu_photo']; ?>" alt="">
                        <h3><?php echo $row['menu_name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <a class="link-btn-2" data-price="<?php echo $row['price']; ?>">Available Today</a>
                    </div>
            <?php
                }
            } else {
                echo "";
            }
            ?>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <button id="modalCloseButton" class="close">&times;</button>
                <div class="modal-header">
                    <h2>
                        <p style="font-size: 18px; color: green;">Price: </p>
                    </h2>
                </div>
                <div class="modal-body">
                    <p> <span id="modal-price" style="font-size: 20px;"></span></p>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the close button element
                var closeButton = document.getElementById("modalCloseButton");

                // When the user clicks on the button, open the modal
                var linkBtns = document.querySelectorAll('.link-btn-2');

                linkBtns.forEach(function(linkBtn) {
                    linkBtn.addEventListener('click', function() {
                        modal.style.display = "block";
                        var price = this.dataset.price;
                        document.getElementById("modal-price").innerHTML = price;
                    });
                });

                // When the user clicks on the close button, close the modal
                closeButton.onclick = function() {
                    closeModal();
                };

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        closeModal();
                    }
                };

                // Close modal function
                function closeModal() {
                    modal.style.display = "none";
                }
            });
        </script>

    </section>

    <script>
        // Add active class to selected category button and filter menu items
        var filterBtns = document.querySelectorAll('.filter-btn');
        var menuItems = document.querySelectorAll('.box');

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var categoryId = this.id;

                // Remove active class from all buttons
                filterBtns.forEach(function(btn) {
                    btn.classList.remove('active-btn');
                });

                // Add active class to selected button
                this.classList.add('active-btn');

                // Show menu items for selected category
                if (categoryId == 'all') {
                    menuItems.forEach(function(item) {
                        item.style.display = 'block';
                    });
                } else {
                    menuItems.forEach(function(item) {
                        item.style.display = 'none';
                    });

                    var categoryItems = document.querySelectorAll('.category-' + categoryId);
                    categoryItems.forEach(function(item) {
                        item.style.display = 'block';
                    });
                }
            });
        });
    </script>

    <!-- menu section ends -->

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
                        <p style="font-size: 14px;">© <?php echo $company_year . $company_name ?> | All Rights Reserved <br><em style="font-size: 12px;">Designed and Developed by J. Santiago</em></p>
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