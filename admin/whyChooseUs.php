<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Us</title>

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
            height: auto;
            padding-bottom: 100px;
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

                <li class="dropdown active">
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

                        <a class="navbar-brand"> Why Choose Us </a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">web</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">logout</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

            <div class="main-content">
                <p class="category">About / <a href="ourPhilosophy.php"></a><strong>Why Choose Us</strong></p>
                <br>
                <div class="row">
                    <div class="container">
                        <?php
                        include('../db.php');

                        $sql = "SELECT * FROM whychooseus";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $heading = $row['heading'];
                            $subheading = $row['subheading'];
                            $background_image = $row['background_image'];
                            $index_photo = $row['index_photo'];
                            $title = $row['title'];
                            $description = $row['description'];
                        } else {
                            echo " ";
                        }
                        ?>
                        <form action="" method="POST" autocomplete="on" enctype="multipart/form-data">
                            <label for="image">Background Image</label>
                            <input type="file" id="image" name="image" accept=".jpg,.jpeg,.png">
                            <br>

                            <label for="index_photo">Index Photo</label>
                            <input type="file" id="index_photo" name="index_photo" accept=".jpg,.jpeg,.png">
                            <br>

                            <label for="heading">Heading</label>
                            <input type="text" id="heading" name="heading" value="<?php echo isset($_POST['heading']) ? $_POST['heading'] : $heading; ?>">

                            <label for="subheading">Subheading</label>
                            <input type="text" id="subheading" name="subheading" value="<?php echo isset($_POST['subheading']) ? $_POST['subheading'] : $subheading; ?>">

                            <label for="title">Title</label>
                            <textarea id="title" name="title" style="height:100px"><?php echo isset($_POST['title']) ? $_POST['title'] : $title; ?></textarea>

                            <label for="description">Description</label>
                            <textarea id="description" name="description" style="height:100px"><?php echo isset($_POST['description']) ? $_POST['description'] : $description; ?></textarea>


                            <?php
                            if (isset($_POST['submit'])) {
                                include('../db.php');

                                $heading = isset($_POST['heading']) ? $_POST['heading'] : $menu_name;
                                $subheading = isset($_POST['subheading']) ? $_POST['subheading'] : $subheading;
                                $title = isset($_POST['title']) ? $_POST['title'] : $title;
                                $description = isset($_POST['description']) ? $_POST['description'] : $description;
                                $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
                                $index_photo = isset($_FILES['index_photo']['name']) ? $_FILES['index_photo']['name'] : '';

                                $query = "UPDATE whychooseus SET heading = ?, subheading = ?, title = ?, description = ?";
                                $params = array($heading, $subheading, $title, $description);

                                if (!empty($_FILES['image']['name'])) {
                                    $temp_name = $_FILES['image']['tmp_name'];
                                    $folder_path = "../images/";
                                    if (move_uploaded_file($temp_name, $folder_path . $image)) {
                                        $query .= ", background_image = ?";
                                        array_push($params, $image);
                                    } else {
                                        echo '<br><div style="text-align:center;">
            <div class="banner">
                <div class="banner__content">
                    <div class="banner__text">
                        Failed to upload background image
                    </div>
                </div>
            </div>
        </div>';
                                        exit();
                                    }
                                }
                                if (!empty($_FILES['index_photo']['name'])) {
                                    $temp_name = $_FILES['index_photo']['tmp_name'];
                                    $folder_path = "../images/";
                                    if (move_uploaded_file($temp_name, $folder_path . $index_photo)) {
                                        $query .= ", index_photo = ?";
                                        array_push($params, $index_photo);
                                    } else {
                                        echo '<br><div style="text-align:center;">
                                        <div class="banner">
                                            <div class="banner__content">
                                                <div class="banner__text">
                                                    Failed to upload index photo
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                        exit();
                                    }
                                }

                                $query .= " WHERE whychooseus_id=1";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param(str_repeat("s", count($params)), ...$params);

                                if ($stmt->execute()) {
                                    echo '<br><br><div style="text-align:center;">
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
                                mysqli_close($conn);
                            }
                            ?>

                            <br><br>
                            <input type="submit" value="Submit" id="submit" name="submit">
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
                                                <a>
                                                    +63 929 301 0483
                                                </a>
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