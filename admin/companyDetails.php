<?php
require('../secure.php');
include('../db.php');

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
    $opening_time = $row['opening_time'];
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="stylesheet" href="../css/admin.css">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="../images/<?php echo $logo_icon ?>" type="images" />

    <style>
        .container {
            padding-bottom: 450px;
            height: auto !important;
        }

        .navbar {
            background-color: <?php echo $color_theme ?>;
            color: #FFFFFF;
        }
    </style>

</head>

<body>

    <div class="wrapper">
        <div class="body-overlay"></div>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="../images/<?php echo $logo_icon ?>" class="img-fluid" /><span><?php echo $company_name ?></span></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="">
                    <a href="../admin/dashboard.php" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">home</i><span>Home</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li>
                            <a href="../admin/herobanner.php?category=1">Hero Banner</a>
                        </li>
                        <li>
                            <a href="../admin/gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="../admin/testimonials.php">Testimonials</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#menuSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">inventory_2</i><span>Menu</span></a>
                    <ul class="collapse list-unstyled menu" id="menuSubmenu1">
                        <li>
                            <a href="../admin/herobanner.php?category=2">Hero Banner</a>
                        </li>
                        <li>
                            <a href="../admin/menuCategory.php">Menu Category</a>
                        </li>
                        <li>
                            <a href="../admin/addProduct.php">Add New Product</a>
                        </li>
                        <li>
                            <a href="../admin/productList.php">Product List</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#serviceSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">groups</i><span>Services</span></a>
                    <ul class="collapse list-unstyled menu" id="serviceSubmenu2">
                        <li>
                            <a href="../admin/privateDining.php">Private Dining</a>
                        </li>
                        <li>
                            <a href="../admin/tableReservation.php">Table Reservation</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">info</i>
                        <span>About</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                        <li>
                            <a href="../admin/ourPhilosophy.php">Our Philosophy</a>
                        </li>
                        <li>
                            <a href="../admin/whyChooseUs.php">Why Choose Us?</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">contacts</i><span>Contact</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                        <li>
                            <a href="../admin/contactForm.php">Contact Form</a>
                        </li>
                        <li>
                            <a href="../admin/feedbackSuggestion.php">Feedback & Suggestion</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown active">
                    <a href="#footerSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">store</i><span>Company</span></a>
                    <ul class="collapse list-unstyled menu" id="footerSubmenu4">
                        <li>
                            <a href="../admin/companyDetails.php">Company Details</a>
                        </li>
                        <li>
                            <a href="../admin/deliveryPartners.php">Delivery Partners</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#footerSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">format_list_bulleted</i><span>Reservations</span></a>
                    <ul class="collapse list-unstyled menu" id="footerSubmenu5">
                        <li>
                            <a href="../admin/pdList.php">Private Dining List</a>
                        </li>
                        <li>
                            <a href="../admin/trList.php">Table Reservation List</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#footerSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">groups</i><span>Engagements</span></a>
                    <ul class="collapse list-unstyled menu" id="footerSubmenu6">
                        <li>
                            <a href="../admin/contactList.php">Contact Submission List</a>
                        </li>
                        <li>
                            <a href="../admin/feedbackList.php">Feedback Submission List</a>
                        </li>
                    </ul>
                </li>
                        <li class="">
                            <a href="../admin/visitsList.php"><i class="material-icons">pageview</i><span>Website Visits</span></a>
                        </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>

                        <a class="navbar-brand"> Company Details </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php" target="_blank">
                                        <span class="material-icons">web</span>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="settings.php">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>
                                <li class="dropdown nav-item active">
                                    <a href="" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">logout</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="../logout.php">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

            <div class="main-content">
                <p class="category">Company / <strong>Company Details</strong></p>
                <div class="row">
                    <div class="container">
                        <br>
                        <?php
                        include('../db.php');

                        $sql = "SELECT * FROM company";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $company_year = $row['company_year'];
                            $company_name = $row['company_name'];

                            $address = $row['address'];
                            $phone = $row['phone'];
                            $email = $row['email'];

                            $store_hours = $row['store_hours'];
                            $closing_time = $row['closing_time'];
                            $color_theme = $row['color_theme'];
                            $fixed_header = $row['fixed_header'];

                            $google_map = $row['google_map'];

                            $facebook_link = $row['facebook_link'];
                            $instagram_link = $row['instagram_link'];
                            $twitter_link = $row['twitter_link'];

                            $logo_orig = $row['logo_orig'];
                            $logo_white = $row['logo_white'];
                            $logo_icon = $row['logo_icon'];
                        } else {
                            echo " ";
                        }
                        ?>
                        <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">

                            <label for="company_year">Company Year</label>
                            <input type="text" id="company_year" name="company_year" value="<?php echo isset($_POST['company_year']) ? $_POST['company_year'] : $company_year; ?>">
                            <br><br>
                            <label for="company_name">Company Name</label>
                            <input type="text" id="company_name" name="company_name" value="<?php echo isset($_POST['company_name']) ? $_POST['company_name'] : $company_name; ?>">
                            <br><br>
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : $address; ?>">
                            <br><br>
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $phone; ?>">
                            <br><br>
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : $email; ?>">
                            <br><br>
                            <label for="store_hours">Landing Page Banner</label>
                            <input type="text" id="store_hours" name="store_hours" value="<?php echo isset($_POST['store_hours']) ? $_POST['store_hours'] : $store_hours; ?>">
                            <br><br>
                            <label for="opening_time">Start of Business Hours</label>
                            <input type="time" id="opening_time" name="opening_time" value="<?php echo isset($_POST['opening_time']) ? $_POST['opening_time'] : $opening_time; ?>">
                            <br><br>
                            <label for="closing_time">End of Business Hours</label>
                            <input type="time" id="closing_time" name="closing_time" value="<?php echo isset($_POST['closing_time']) ? $_POST['closing_time'] : $closing_time; ?>">
                            <br><br>
                            <label for="seat_capacity">Seat Capacity</label>
                            <input type="number" id="seat_capacity" name="seat_capacity" value="<?php echo isset($_POST['seat_capacity']) ? $_POST['seat_capacity'] : $seat_capacity; ?>">
                            <br><br>
                            <label for="color_theme">Color Theme</label>
                            <input type="color" id="color_theme" name="color_theme" value="<?php echo isset($_POST['color_theme']) ? $_POST['color_theme'] : $color_theme; ?>" onchange="updateColorCode()">

                            <!-- Display the selected color code -->
                            <span id="colorCode"><em>Currect Color Theme: </em><?php echo isset($_POST['color_theme']) ? $_POST['color_theme'] : $color_theme; ?></span>
                            <br><br>
                            <script>
                                // Function to update the color code when color picker value changes
                                function updateColorCode() {
                                    var colorPicker = document.getElementById("color_theme");
                                    var colorCode = document.getElementById("colorCode");
                                    colorCode.textContent = colorPicker.value.toUpperCase();
                                }
                            </script>

                            <br><br>
                            <label for="fixed_header">Fixed Header Image</label>
                            <input type="file" id="fixed_header" name="fixed_header" accept=".jpg,.jpeg,.png">
                            <br><br>
                            <label for="google_map">Google Maps Location Embeded Link</label>
                            <textarea id="google_map" name="google_map" style="height:100px"><?php echo isset($_POST['google_map']) ? $_POST['google_map'] : $google_map; ?></textarea>
                            <br><br>
                            <label for="address_link">Address Link</label>
                            <textarea id="address_link" name="address_link" style="height:50px"><?php echo isset($_POST['address_link']) ? $_POST['address_link'] : $address_link; ?></textarea>
                            <br><br>
                            <label for="facebook_link">Facebook Link</label>
                            <input type="text" id="facebook_link" name="facebook_link" value="<?php echo isset($_POST['facebook_link']) ? $_POST['facebook_link'] : $facebook_link; ?>">
                            <br><br>
                            <label for="instagram_link">Instagram Link</label>
                            <input type="text" id="instagram_link" name="instagram_link" value="<?php echo isset($_POST['instagram_link']) ? $_POST['instagram_link'] : $instagram_link; ?>">
                            <br><br>
                            <label for="twitter_link">Twitter Link</label>
                            <input type="text" id="twitter_link" name="twitter_link" value="<?php echo isset($_POST['twitter_link']) ? $_POST['twitter_link'] : $twitter_link; ?>">
                            <br><br>
                            <label for="logo_orig">Original Logo PNG</label>
                            <input type="file" id="logo_orig" name="logo_orig" accept=".jpg,.jpeg,.png">
                            <br><br>
                            <label for="logo_white">Logo White Version PNG</label>
                            <input type="file" id="logo_white" name="logo_white" accept=".jpg,.jpeg,.png">
                            <br><br>
                            <label for="logo_icon">Icon Logo PNG</label>
                            <input type="file" id="logo_icon" name="logo_icon" accept=".jpg,.jpeg,.png">
                            <br>

                            <?php
                            if (isset($_POST['submit'])) {
                                include('../db.php');

                                $company_year = isset($_POST['company_year']) ? $_POST['company_year'] : $company_year;
                                $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : $company_name;
                                $address = isset($_POST['address']) ? $_POST['address'] : $address;
                                $phone = isset($_POST['phone']) ? $_POST['phone'] : $phone;
                                $email = isset($_POST['email']) ? $_POST['email'] : $email;
                                $store_hours = isset($_POST['store_hours']) ? $_POST['store_hours'] : $store_hours;
                                $opening_time = isset($_POST['opening_time']) ? $_POST['opening_time'] : $opening_time;
                                $closing_time = isset($_POST['closing_time']) ? $_POST['closing_time'] : $closing_time;
                                $seat_capacity = isset($_POST['seat_capacity']) ? $_POST['seat_capacity'] : $seat_capacity;
                                $color_theme = isset($_POST['color_theme']) ? $_POST['color_theme'] : $color_theme;
                                $fixed_header = $row['fixed_header'];
                                $google_map = isset($_POST['google_map']) ? $_POST['google_map'] : $google_map;
                                $address_link = isset($_POST['address_link']) ? $_POST['address_link'] : $address_link;
                                $facebook_link = isset($_POST['facebook_link']) ? $_POST['facebook_link'] : $facebook_link;
                                $twitter_link = isset($_POST['twitter_link']) ? $_POST['twitter_link'] : $twitter_link;
                                $instagram_link = isset($_POST['instagram_link']) ? $_POST['instagram_link'] : $instagram_link;
                                $logo_orig = $row['logo_orig'];
                                $logo_white = $row['logo_white'];
                                $logo_icon = $row['logo_icon'];

                                // Check if any logo files were uploaded and move them to the designated folder
                                if (!empty($_FILES['fixed_header']['name'])) {
                                    $fixed_header = $_FILES['fixed_header']['name'];
                                    $temp_name = $_FILES['fixed_header']['tmp_name'];
                                    $folder_path = "../images/";
                                    move_uploaded_file($temp_name, $folder_path . $fixed_header);
                                }
                                if (!empty($_FILES['logo_orig']['name'])) {
                                    $logo_orig = $_FILES['logo_orig']['name'];
                                    $temp_name = $_FILES['logo_orig']['tmp_name'];
                                    $folder_path = "../images/";
                                    move_uploaded_file($temp_name, $folder_path . $logo_orig);
                                }
                                if (!empty($_FILES['logo_white']['name'])) {
                                    $logo_white = $_FILES['logo_white']['name'];
                                    $temp_name = $_FILES['logo_white']['tmp_name'];
                                    $folder_path = "../images/";
                                    move_uploaded_file($temp_name, $folder_path . $logo_white);
                                }
                                if (!empty($_FILES['logo_icon']['name'])) {
                                    $logo_icon = $_FILES['logo_icon']['name'];
                                    $temp_name = $_FILES['logo_icon']['tmp_name'];
                                    $folder_path = "../images/";
                                    move_uploaded_file($temp_name, $folder_path . $logo_icon);
                                }

                                // Update database with new values
                                $stmt = $conn->prepare("UPDATE company SET company_year=?, company_name=?, address=?, phone=?, email=?, store_hours=?, opening_time=?, closing_time=?, seat_capacity=?, color_theme=?, fixed_header=?, google_map=?, address_link=?, facebook_link=?, instagram_link=?, twitter_link=?, logo_orig=?, logo_white=?, logo_icon=? WHERE company_id=1");
                                $stmt->bind_param("sssssssssssssssssss", $company_year, $company_name, $address, $phone, $email, $store_hours, $opening_time, $closing_time, $seat_capacity, $color_theme, $fixed_header, $google_map, $address_link, $facebook_link, $instagram_link, $twitter_link, $logo_orig, $logo_white, $logo_icon);
                                if ($stmt->execute()) {
                                    if ($stmt->affected_rows > 0) {
                                        echo '<br><br><div style="text-align:center;">
                                            <div class="banner">
                                              <div class="banner__content">
                                                <div class="banner__text">
                                                  Updated
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    } else {
                                        echo '<br><div style="text-align:center;">
                                            <div class="banner">
                                              <div class="banner__content">
                                                <div class="banner__text">
                                                  No Changes
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                } else {
                                    echo '<br><div style="text-align:center;">
                                          <div class="banner">
                                            <div class="banner__content">
                                              <div class="banner__text">
                                                Not Updated
                                              </div>
                                            </div>
                                          </div>
                                        </div>';
                                }
                                mysqli_close($conn);
                            }
                            ?>
                            <br><br>
                            <input type="submit" value="Submit" id="submit" name="submit">
                            <br><br><br><br><br><br>
                        </form>

                    </div>

                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <nav class="d-flex">
                                        <ul class="m-0 p-0">
                                            <li>
                                                <a>
                                                    Tech Support:
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="m-0 p-0">
                                            <li>
                                                <a href="mailto:jynerline@gmail.com" style="font-style: italic;">jynerline@gmail.com</a>
                                            </li>
                                        </ul>
                                    </nav>

                                </div>
                                <div class="col-md-6">
                                    <p class="copyright d-flex justify-content-end"> &copy <?php echo $company_year . " " . $company_name ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <style>
                .container {
                    height: auto;
                    padding-bottom: 50px;
                }
            </style>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../js/jquery-3.3.1.slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery-3.3.1.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $('.more-button,.body-overlay').on('click', function() {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

            });
        </script>
</body>

</html>