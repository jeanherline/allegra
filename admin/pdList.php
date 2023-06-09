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
    <title>Private Dining List</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- pagination -->
    <meta name="description" content="Bootstrap.">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

    <link rel="icon" href="../images/<?php echo $logo_icon ?>" type="images" />
    <style>
        #myTable td,
        th {
            font-size: 14px;
            text-align: center;
            /* Adjust the font size as needed */
        }

        .container {
            padding-bottom: 600px;
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

                <li class="dropdown active">
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

                        <a class="navbar-brand"> Private Dining List </a>

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
                <p class="category">Reservations / <strong>Private Dining List</strong></p>
                <div class="row">

                    <div class="container">
                        <br>
                        <div class="header_fixed">
                            <table id="myTable" class="table table-bordered table-responsive table-hover">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>No. of Guests</th>
                                        <th>Reserv. Date</th>
                                        <th>Reserv. Time</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM private_dining ORDER BY CASE WHEN status = 'pending' THEN 0 ELSE 1 END, reservation_date ASC, reservation_time ASC";
                                    $result = $conn->query($sql);
                                    $numRows = mysqli_num_rows($result);
                                    $ctr = 1;

                                    if ($numRows > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $private_dining_id = $row['private_dining_id'];
                                            $first_name = $row['first_name'];
                                            $last_name = $row['last_name'];
                                            $email = $row['email'];
                                            $phone = $row['phone'];
                                            $number_of_guests = $row['number_of_guests'];
                                            $reservation_date = $row['reservation_date'];
                                            $reservation_time = $row['reservation_time'];
                                            $others = $row['others'];
                                            $special_requests = $row['special_requests'];
                                            $status = $row['status'];
                                            $created_at = $row['created_at'];
                                    ?>
                                            <tr>
                                                <td><?php echo $ctr++; ?></td>
                                                <td><strong><?php echo $first_name . " " . $last_name ?></strong></td>
                                                <td><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></td>
                                                <td><a href="tel:<?php echo $phone ?>"><?php echo $phone ?></td>
                                                <td><?php echo $number_of_guests ?></td>
                                                <td><strong><?php echo date("F j, Y", strtotime($reservation_date)) ?></strong></td>
                                                <td><strong><?php echo date('g:i A', strtotime($reservation_time)); ?></strong></td>

                                                <?php
                                                if ($row['status'] == "Pending") {
                                                    echo '<td><span class="badge badge-warning">' . $row['status'] . '</span></td>';
                                                } elseif ($row['status'] == "Done") {
                                                    echo '<td><span class="badge badge-success">' . $row['status'] . '</span></td>';
                                                } else {
                                                    echo '<td><span class="badge badge-danger">' . $row['status'] . '</span></td>';
                                                }
                                                ?>

                                                <td>
                                                    <a href="viewPD.php?private_dining_id=<?php echo $private_dining_id; ?>">
                                                        <button><i class="fa fa-eye"></i></button>&nbsp
                                                    </a>
                                                    <a href="editPD.php?private_dining_id=<?php echo $private_dining_id; ?>">
                                                        <button><i class="fa fa-edit"></i></button>&nbsp
                                                    </a>

                                                    <?php
                                                    if ($status == "Pending") {
                                                    ?>
                                                        <a href="donePD.php?private_dining_id=<?php echo $private_dining_id; ?>">
                                                            <button><i class="fa fa-check"></i></button>&nbsp
                                                        </a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <a href="pendingPD.php?private_dining_id=<?php echo $private_dining_id; ?>">
                                                            <button><i class="fa fa-ban"></i></button>&nbsp
                                                        </a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "";
                                    }
                                    mysqli_close($conn);
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Other scripts -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

            $('#myTable').DataTable({
                lengthChange: false,
                buttons: ['print']
            });
        });
    </script>
</body>

</html>