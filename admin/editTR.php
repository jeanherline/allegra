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
    $google_map = $row['google_map'];
    $facebook_link = $row['facebook_link'];
    $instagram_link = $row['instagram_link'];
    $twitter_link = $row['twitter_link'];
} else {
    echo " ";
}

if (isset($_GET['table_reservation_id'])) {
    $id = $_GET['table_reservation_id'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Table Reservation # <?php echo $id ?></title>

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
            padding-bottom: 300px;
            height: 160vh !important;
        }

        input[type=text],
        input[type=date],
        input[type=time],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 15px;
            margin-bottom: 16px;
            resize: vertical;
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


                <li class="dropdown active">
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
                        <i class="material-icons">add_task</i><span>Reservations</span></a>
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

                        <a class="navbar-brand"> Edit Table Reservation # <?php echo $id ?> </a>

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
                <p class="category">Reservations / <a href="pdList.php">Table Reservation List / </a><strong>Edit</strong></p>
                <br>
                <div class="row">
                    <div class="container">
                        <?php
                        include('../db.php');

                        if (isset($_GET['table_reservation_id'])) {
                            $id = $_GET['table_reservation_id'];
                        } else {
                            echo "ID not set.";
                            return;
                        }

                        $sql = "SELECT * FROM private_dining WHERE private_dining_id = $id";
                        $result = $conn->query($sql);
                        $numRows = $result->num_rows;

                        if ($numRows > 0) {
                            $row = $result->fetch_assoc();
                            $first_name = $row['first_name'];
                            $last_name = $row['last_name'];
                            $email = $row['email'];
                            $phone = $row['phone'];
                            $number_of_guests = $row['number_of_guests'];
                            $reservation_date = $row['reservation_date'];
                            $reservation_time = $row['reservation_time'];
                            $others = $row['others'];
                            $request = $row['special_requests'];
                            $status = $row['status'];
                            $created_at = $row['created_at'];
                        } else {
                            echo "No record found.";
                        }
                        ?>
                        <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : $first_name; ?>">

                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : $last_name; ?>">

                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : $email; ?>">

                            <label for="guests">Number of Guests</label>
                            <select class="box" id="guests" name="guests">
                                <option value="<?php echo $number_of_guests; ?>" selected disabled>
                                    <?php echo isset($_POST['guests']) ? $_POST['guests'] : $number_of_guests; ?>
                                </option>
                                <?php
                                for ($i = 1; $i <= 11; $i++) {
                                    $selected = isset($_POST['guests']) && $_POST['guests'] == $i ? 'selected' : '';
                                    echo "<option value='$i' $selected>$i</option>";
                                }
                                ?>
                            </select>

                            <label for="date" id="date">Date of Reservation</label>
                            <input type="date" name="date" id="date" class="box" value="<?php echo isset($_POST['reservation_date']) ? $_POST['reservation_date'] : $reservation_date; ?>" min="<?php echo isset($_POST['date']) ? $_POST['date'] : $date; ?>">

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

                            <label for="time" id="time">Time of Reservation</label>
                            <input type="time" name="time" id="time" class="box" value="<?php echo isset($_POST['reservation_time']) ? $_POST['reservation_time'] : $reservation_time; ?>" step="60">

                            <label for="others">Others</label>
                            <input type="text" id="others" name="others" value="<?php echo isset($_POST['others']) ? $_POST['others'] : $others; ?>" class="box">

                            <label for="request">Special Requests</label>
                            <textarea name="request" class="box" id="request" cols="30" rows="10"><?php echo isset($_POST['request']) ? $_POST['request'] : $request; ?></textarea>


                            <?php
                            if (isset($_POST['submit'])) {
                                $first_name = $_POST['first_name'];
                                $last_name = $_POST['last_name'];
                                $email = $_POST['email'];
                                $number_of_guests = isset($_POST['guests']) ? $_POST['guests'] : $number_of_guests;
                                $reservation_date = $_POST['date'];
                                $reservation_time = $_POST['time'];

                                if (empty($_POST['others'])) {
                                    $others = "N/A";
                                } else {
                                    $others = $_POST['others'];
                                }
                                if (empty($_POST['request'])) {
                                    $special_requests = "N/A";
                                } else {
                                    $special_requests = $_POST['request'];
                                }

                                $stmt = $conn->prepare("UPDATE table_reservation SET
                                            first_name = ?,
                                            last_name = ?,
                                            email = ?,
                                            number_of_guests = ?,
                                            reservation_date = ?,
                                            reservation_time = ?,
                                            others = ?,
                                            special_requests = ?
                                        WHERE table_reservation_id = ?");

                                if ($stmt === false) {
                                    die('prepare() failed: ' . htmlspecialchars($conn->error));
                                }

                                $stmt->bind_param('ssssssssi', $first_name, $last_name, $email, $number_of_guests, $reservation_date, $reservation_time, $others, $special_requests, $id);

                                if ($stmt->execute() === TRUE) {
                                    echo '<br><div style="text-align:center;">
                                    <div class="banner">
                                        <div class="banner__content">
                                        <div class="banner__text">
                                            Data Updated
                                        </div>
                                        </div>
                                    </div>
                                    </div>';
                                } else {
                                    echo '<br><div style="text-align:center;">
                                    <div class="banner">
                                        <div class="banner__content">
                                        <div class="banner__text">
                                            Data Not Updated
                                        </div>
                                        </div>
                                    </div>
                                    </div>';
                                }
                                $stmt->close();
                                mysqli_close($conn);
                            }
                            ?>
                            <br><br>
                            <input type="submit" value="Submit" id="submit" name="submit">
                            <br><br>
                            <br><br>
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