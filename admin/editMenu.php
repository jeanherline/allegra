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
    <title>Edit Menu Product</title>

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

                        <a class="navbar-brand"> Edit Menu Product </a>

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
                <p class="category">Menu / <a href="productList.php">Product List / </a><strong>Edit</strong></p>
                <br>
                <div class="row">
                    <div class="container">
                        <?php
                        include('../db.php');

                        if (isset($_GET['menu_id'])) {
                            $id = $_GET['menu_id'];

                            $sql = "SELECT m.*, c.category_name FROM menu m INNER JOIN category c ON m.category = c.category_id WHERE menu_id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $menu_id = $row['menu_id'];
                                $menu_photo = $row['menu_photo'];
                                $menu_name = $row['menu_name'];
                                $description = $row['description'];
                                $price = $row['price'];
                                $category = $row['category_name'];
                                $availability = $row['availability'];
                                $status = $row['status'];
                            } else {
                                echo " ";
                            }
                        ?>
                            <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                                <label for="image">Image</label>
                                <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png">
                                <br><br>
                                <label for="menu_name">Menu Name</label>
                                <input type="text" id="menu_name" name="menu_name" value="<?php echo isset($_POST['menu_name']) ? $_POST['menu_name'] : $menu_name; ?>">
                                <br><br>
                                <label for="description">Description</label>
                                <textarea id="description" name="description" style="height:100px"><?php echo isset($_POST['description']) ? $_POST['description'] : $description; ?></textarea>
                                <br><br>
                                <label for="price">Price</label>
                                <input type="text" id="price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : $price; ?>">
                                <br><br>
                                <label for="category">Category</label>
                                <?php
                                $sql = "SELECT * FROM category WHERE status = 'active' AND category_name = ?";
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("s", $category);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $numRows = $result->num_rows;

                                if ($numRows > 0) {
                                    $row = $result->fetch_assoc();
                                    $categ_id = $row['category_id'];
                                }
                                ?>
                                <select id="category" name="category">
                                    <option value="<?php echo isset($_POST['categ_id']) ? $_POST['categ_id'] : $categ_id; ?>" selected disabled><?php echo isset($_POST['category']) ? $_POST['category'] : $category; ?></option>
                                    <?php
                                    $sql = "SELECT * FROM category WHERE status = 'active' AND category_id > 1";
                                    $result = mysqli_query($conn, $sql);
                                    $numRows = mysqli_num_rows($result);

                                    if ($numRows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $category_id = $row['category_id'];
                                            $category_name = $row['category_name'];
                                    ?>
                                            <option value="<?php echo isset($_POST['category_id']) ? $_POST['category_id'] : $category_id; ?>" <?php echo $category_id == $categ_id ? 'selected' : ''; ?>><?php echo isset($_POST['category_name']) ? $_POST['category_name'] : $category_name; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <br><br>

                                <label for="availability">Availability</label>
                                <select id="availability" name="availability">
                                    <option value="<?php echo $availability; ?>" disabled selected><?php echo $availability; ?></option>
                                    <option value="Available Today" <?php echo $availability == 'Available Today' ? 'selected' : ''; ?>>Available Today</option>
                                    <option value="Unavailable Today" <?php echo $availability == 'Unavailable Today' ? 'selected' : ''; ?>>Unavailable Today</option>
                                </select>
                                <br>
                                <?php
                                if (isset($_POST['submit'])) {
                                    if (!empty($_FILES["image"]["name"])) {
                                        // File name
                                        $tempname = $_FILES["image"]["tmp_name"];
                                        $folder = "../images/menu/";
                                        $image = basename($_FILES["image"]["name"]);
                                        $target_file = $folder . $image;
                                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                        // Check if file already exists
                                        if (file_exists($target_file)) {
                                            $image = basename($_FILES["image"]["name"], "." . $imageFileType) . "_" . time() . "." . $imageFileType;
                                            $target_file = $folder . $image;
                                        }

                                        move_uploaded_file($tempname, $target_file);
                                    }

                                    // Update values in input fields
                                    $menu_name = isset($_POST['menu_name']) ? $_POST['menu_name'] : $menu_name;
                                    $description = isset($_POST['description']) ? $_POST['description'] : $description;
                                    $price = isset($_POST['price']) ? $_POST['price'] : $price;
                                    $category = isset($_POST['category']) ? $_POST['category'] : $category;
                                    $availability = isset($_POST['availability']) ? $_POST['availability'] : $availability;

                                    // Check if the selected category exists in the category table
                                    $stmt = $conn->prepare("SELECT * FROM category WHERE category_id = ? AND status = 'Active'");
                                    $stmt->bind_param("i", $category);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result->num_rows == 0) {
                                        // Category does not exist, display error message
                                        echo '<br><div style="text-align:center;">
                                            <div class="banner">
                                                <div class="banner__content">
                                                    <div class="banner__text">
                                                        Invalid Category
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                    } else {
                                        // Category exists, update the record
                                        $query = "UPDATE menu SET menu_name = ?, description = ?, price = ?, category = ?, availability = ?";

                                        if (!empty($_FILES["image"]["name"])) {
                                            $query .= ", menu_photo = ?";
                                        }

                                        $query .= " WHERE menu_id = ?";

                                        $stmt = $conn->prepare($query);

                                        if (!empty($_FILES["image"]["name"])) {
                                            $stmt->bind_param("sssissi", $menu_name, $description, $price, $category, $availability, $image, $id);
                                        } else {
                                            $stmt->bind_param("sssssi", $menu_name, $description, $price, $category, $availability, $id);
                                        }

                                        $result = $stmt->execute();

                                        if ($result && mysqli_affected_rows($conn) > 0) {
                                            echo '<br><br><div style="text-align:center;">
                                            <div class="banner">
                                                <div class="banner__content">
                                                <div class="banner__text">
                                                    Updated
                                                </div>
                                                </div>
                                            </div>
                                            </div>';
                                        } elseif ($result && mysqli_affected_rows($conn) === 0) {
                                            echo '<br><div style="text-align:center;">
                                            <div class="banner">
                                                <div class="banner__content">
                                                <div class="banner__text">
                                                    No changes
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
                                    $stmt->close();
                                }
                                mysqli_close($conn);
                                ?>
                                <br><br>
                                <input type="submit" value="Submit" id="submit" name="submit">
                                <br><br>
                                <br><br>
                            </form>
                        <?php
                        }
                        ?>
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