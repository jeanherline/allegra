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
    <title>Settings</title>

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

        input[type=password] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;
        }

        #showPasswordCheckbox {
            margin-left: 10px;
        }

        #passwordInput[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;
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

                <li class="dropdown active">
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

                <li class="dropdown">
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

                        <a class="navbar-brand"> Settings </a>

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
                <p class="category">Settings / <strong>Account Credentials</strong></p>
                <div class="row">
                    <div class="container">
                        <br>
                        <?php
                        include('../db.php');

                        // Retrieve the admin credentials from the database
                        $sql = "SELECT * FROM admin_credentials";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $username = $row['username'];
                            // The password should ideally be hashed and stored securely in the database.
                            $password = $row['password'];
                        } else {
                            // Set default values if no credentials are found
                            $username = '';
                            $password = '';
                        }
                        ?>
                        <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                            <label for="username"><strong>Username</strong></label>
                            <input type="text" id="username" name="username" value="<?= isset($_POST['username']) ? $_POST['username'] : $username ?>" pattern="[a-zA-Z0-9_]{3,20}" required>

                            <label for="passwordInput"><strong>Current Password</strong></label>
                            <input type="password" id="passwordInput" name="passwordInput" value="" required>
                            <label for="showPasswordCheckbox">
                                <input type="checkbox" id="showPasswordCheckbox">
                                Show Password
                            </label>

                            <br><br>

                            <label for="newPasswordInput"><strong>New Password</strong></label>
                            <input type="password" id="newPasswordInput" name="newPasswordInput" <?= empty($_POST['username']) ? 'disabled' : '' ?> pattern=".{8,}" title="8+ characters" minlength="8">
                            <label for="showNewPasswordCheckbox">
                                <input type="checkbox" id="showNewPasswordCheckbox">
                                Show New Password
                            </label>

                            <script>
                                const passwordInput = document.getElementById("passwordInput");
                                const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
                                const newPasswordInput = document.getElementById("newPasswordInput");
                                const showNewPasswordCheckbox = document.getElementById("showNewPasswordCheckbox");

                                showPasswordCheckbox.addEventListener("change", function() {
                                    if (showPasswordCheckbox.checked) {
                                        passwordInput.type = "text";
                                    } else {
                                        passwordInput.type = "password";
                                    }
                                });

                                showNewPasswordCheckbox.addEventListener("change", function() {
                                    if (showNewPasswordCheckbox.checked) {
                                        newPasswordInput.type = "text";
                                    } else {
                                        newPasswordInput.type = "password";
                                    }
                                });
                            </script>

                            <?php
                            if (isset($_POST['submit'])) {
                                $username = isset($_POST['username']) ? $_POST['username'] : '';
                                $currentPassword = isset($_POST['passwordInput']) ? $_POST['passwordInput'] : '';
                                $newPassword = isset($_POST['newPasswordInput']) ? $_POST['newPasswordInput'] : '';

                                // Add your desired validation rules for the username and current password
                                $errors = array();

                                // Validate username
                                if (empty($username)) {
                                    $errors[] = "Username is required.";
                                }

                                // Validate current password
                                if (empty($currentPassword)) {
                                    $errors[] = "Current Password is required.";
                                } else {
                                    // Validate current password against the stored password
                                    $sql = "SELECT password FROM admin_credentials WHERE id=1";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $storedPassword = $row['password'];
                                        if (!password_verify($currentPassword, $storedPassword)) {
                                            $errors[] = "Invalid current password.";
                                        }
                                    } else {
                                        $errors[] = "Invalid current password.";
                                    }
                                }

                                if (empty($errors)) {
                                    // All validation passed, proceed with updating the database

                                    // Check if the new password is not empty
                                    if (!empty($newPassword)) {
                                        // Validate new password
                                        if (strlen($newPassword) < 8) {
                                            $errors[] = "New Password should be at least 8 characters long.";
                                        }
                                    }

                                    if (empty($errors)) {
                                        // Update database with new values
                                        $sql = "UPDATE admin_credentials SET username='$username'";

                                        // Flag variables to track changes
                                        $usernameChanged = false;
                                        $passwordChanged = false;

                                        // Update the password only if the new password is not empty and has been provided
                                        if (!empty($newPassword) && isset($_POST['newPasswordInput'])) {
                                            // Hash the new password before storing it in the database
                                            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                                            $sql .= ", password='$hashedPassword'";
                                            $passwordChanged = true;
                                        }

                                        $sql .= " WHERE id=1";

                                        if ($conn->query($sql) === TRUE) {
                                            echo '<br><div style="text-align:center;">
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
                                                        Not Updated
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                    }
                                }

                                // Display validation errors
                                if (!empty($errors)) {
                                    echo '<br><div style="text-align:center;">
                                    <div class="banner">
                                        <div class="banner__content">
                                            <div class="banner__text">';
                                    foreach ($errors as $error) {
                                        echo $error . '<br>';
                                    }
                                    echo '</div>
                                        </div>
                                    </div>
                                </div>';
                                }
                                mysqli_close($conn);
                            }
                            ?>
                            <br><br>
                            <input type="submit" value="Submit" id="submit" name="submit">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br>
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