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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="../images/<?php echo $logo_icon ?>" type="images" />

    <style>
        .container {
            padding-bottom: 300px;
            height: auto !important;
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
                <li class="active">
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

                        <a class="navbar-brand"> Dashboard </a>

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

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-warning">
                                    <span class="material-icons">equalizer</span>
                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category"><strong>All Time Web Traffic</strong></p>
                                <?php
                                // Retrieve the total visit count for all time
                                $sqlTotalVisits = "SELECT SUM(visit_count) AS total_visits FROM monthly_visits";
                                $resultTotalVisits = $conn->query($sqlTotalVisits);
                                $totalVisits = 0; // Set initial value as 0

                                if ($resultTotalVisits && $resultTotalVisits->num_rows > 0) {
                                    $rowTotalVisits = $resultTotalVisits->fetch_assoc();
                                    $totalVisits = $rowTotalVisits['total_visits'];
                                }
                                ?>
                                <h3 class="card-title"><?php echo $totalVisits; ?></h3>
                            </div>

                            <div class="card-footer">
                                <div class="stats">
                                    <a>Total visits since launch</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-rose">
                                    <span class="material-icons">equalizer</span>

                                </div>
                            </div>
                            <div class="card-content">
                                <?php
                                $currentMonthYear = date('Y-m');
                                $currentMonth = date('F'); // Get the current month name
                                $sqlMonthlyVisits = "SELECT SUM(visit_count) AS monthly_visits FROM monthly_visits WHERE month_year = '$currentMonthYear'";
                                $resultMonthlyVisits = $conn->query($sqlMonthlyVisits);
                                $monthlyVisits = 0; // Set initial value as 0

                                if ($resultMonthlyVisits && $resultMonthlyVisits->num_rows > 0) {
                                    $rowMonthlyVisits = $resultMonthlyVisits->fetch_assoc();
                                    $monthlyVisits = $rowMonthlyVisits['monthly_visits'];
                                }
                                ?>
                                <p class="category"><strong><?php echo $currentMonth; ?> Web Traffic</strong></p>
                                <h3 class="card-title"><?php echo $monthlyVisits; ?></h3>

                            </div>

                            <div class="card-footer">
                                <div class="stats">
                                    <a>Visits this month</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">
                                        table_restaurant
                                    </span>

                                </div>
                            </div>
                            <?php
                            $currentMonthYear = date('Y-m');
                            $currentMonth = date('F'); // Get the current month name
                            // Count total reservations with reservation date within the current month from the private_dining table
                            $sqlPrivateCount = "SELECT COUNT(*) AS private_count FROM private_dining WHERE DATE_FORMAT(reservation_date, '%Y-%m') = '$currentMonthYear'";
                            $resultPrivateCount = $conn->query($sqlPrivateCount);
                            $rowPrivateCount = $resultPrivateCount->fetch_assoc();
                            $privateCount = $rowPrivateCount['private_count'];

                            // Count total reservations with reservation date within the current month from the table_reservation table
                            $sqlTableCount = "SELECT COUNT(*) AS table_count FROM table_reservation WHERE DATE_FORMAT(reservation_date, '%Y-%m') = '$currentMonthYear'";
                            $resultTableCount = $conn->query($sqlTableCount);
                            $rowTableCount = $resultTableCount->fetch_assoc();
                            $tableCount = $rowTableCount['table_count'];

                            // Calculate the total reservations with reservation date within the current month
                            $totalReservations = $privateCount + $tableCount;
                            ?>

                            <div class="card-content">
                                <p class="category"><strong><?php echo $currentMonth; ?> Reservations</strong></p>
                                <h3 class="card-title"><?php echo $totalReservations; ?></h3>
                            </div>

                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="trList.php">Table</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="material-icons text-info">info</i>
                                    <a href="pdList.php">Private Dining</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-info">

                                    <span class="material-icons">
                                        add_comments
                                    </span>
                                </div>
                            </div>
                            <div class="card-content">
                                <?php
                                // Retrieve the total count of contact and feedback entries
                                $sqlTotalCount = "SELECT COUNT(*) AS total_count FROM (
                                    SELECT contact_id FROM contact
                                    UNION ALL
                                    SELECT feedback_id FROM feedback
                                ) AS combined_entries";
                                $resultTotalCount = $conn->query($sqlTotalCount);
                                $totalCount = 0; // Set initial value as 0

                                if ($resultTotalCount && $resultTotalCount->num_rows > 0) {
                                    $rowTotalCount = $resultTotalCount->fetch_assoc();
                                    $totalCount = $rowTotalCount['total_count'];
                                }
                                ?>
                                <p class="category"><strong>Contact & Feedback</strong></p>
                                <h3 class="card-title"><?php echo $totalCount; ?></h3>
                            </div>


                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-info">info</i>
                                    <a href="contactList.php">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="material-icons text-info">info</i>
                                    <a href="feedbackList.php">Feedback</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Pending Cafe Reservations</h4>
                                <p class="category">Latest Report</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Guests</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT *
                                                FROM (
                                                    SELECT
                                                        first_name,
                                                        last_name,
                                                        reservation_date,
                                                        reservation_time,
                                                        number_of_guests,
                                                        'Private Dining' AS type
                                                    FROM private_dining
                                                    WHERE status = 'Pending'
                                                    
                                                    UNION ALL
                                                    
                                                    SELECT
                                                        first_name,
                                                        last_name,
                                                        reservation_date,
                                                        reservation_time,
                                                        number_of_guests,
                                                        'Table Reservation' AS type
                                                    FROM table_reservation
                                                    WHERE status = 'Pending'
                                                ) AS combined_reservations
                                                WHERE reservation_date >= CURDATE()
                                                ORDER BY reservation_date ASC
                                                LIMIT 7";

                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            $ctr = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                $name = $row['first_name'] . ' ' . $row['last_name'];
                                                $type = $row['type'];
                                                $date = date('F j, Y', strtotime($row['reservation_date']));
                                                $time = date('h:i A', strtotime($row['reservation_time']));
                                                $guests = $row['number_of_guests'];
                                                $status = '';

                                                // Calculate the status based on the reservation date
                                                $reservationDate = strtotime($row['reservation_date']);
                                                $currentDate = strtotime(date('Y-m-d'));

                                                if ($reservationDate > $currentDate) {
                                                    $status = 'Soon';
                                                    $statusBadgeClass = 'badge-success';
                                                } elseif ($reservationDate < $currentDate) {
                                                    $status = 'Past Due';
                                                    $statusBadgeClass = 'badge-danger';
                                                } else {
                                                    $status = 'Today';
                                                    $statusBadgeClass = 'badge-warning';
                                                }
                                        ?>

                                                <tr>
                                                    <td><?php echo $ctr++; ?></td>
                                                    <td style="font-size: smaller;"><?php echo $name; ?></td>
                                                    <?php
                                                    if ($type == "Table Reservation") {
                                                        echo '<td><span class="badge badge-warning">' . $row['type'] . '</span></td>';
                                                    } elseif ($type == "Private Dining") {
                                                        echo '<td><span class="badge badge-warning">' . $row['type'] . '</span></td>';
                                                    } else {
                                                        echo '<td><span class="badge badge-danger">' . $row['type'] . '</span></td>';
                                                    }
                                                    ?>
                                                    <td style="font-size: smaller;"><?php echo $date; ?></td>
                                                    <td style="font-size: smaller;"><?php echo $time; ?></td>
                                                    <td style="font-size: smaller;"><?php echo $guests; ?></td>
                                                    <td><span class="badge <?php echo $statusBadgeClass; ?>"><?php echo $status; ?></span></td>
                                                </tr>

                                            <?php
                                            }
                                        } else {
                                            ?>

                                            <tr>
                                                <td colspan="5">No reservations found.</td>
                                            </tr>

                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Contact & Feedback</h4>
                                <p class="category">Latest Report</p>
                            </div>
                            <div class="card-content">
                                <div class="streamline">
                                    <?php
                                    $sqlFeedback = "SELECT * FROM feedback ORDER BY created_at DESC LIMIT 1";
                                    $resultFeedback = $conn->query($sqlFeedback);

                                    if ($resultFeedback->num_rows > 0) {
                                        while ($rowFeedback = $resultFeedback->fetch_assoc()) {
                                    ?>
                                            <div class="sl-item">
                                                <div class="sl-content">
                                                    <small class="text-muted" style="color: blue;"><?php echo date('F j, Y g:i A', strtotime($rowFeedback['created_at'])); ?></small>

                                                    <p><?php echo $rowFeedback['message']; ?></p>
                                                    <p style="font-size: smaller; font-weight: bold;">From: <?php echo $rowFeedback['first_name'] . " " . $rowFeedback['last_name']; ?></p>

                                                    <p style="font-size: smaller; font-style: italic;">Source: Feedback & Suggestions</p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="sl-item">
                                            <div class="sl-content">
                                                <p>No feedback found.</p>
                                            </div>
                                        </div>
                                        <?php
                                    }

                                    $sqlContact = "SELECT * FROM contact ORDER BY created_at DESC LIMIT 1";
                                    $resultContact = $conn->query($sqlContact);

                                    if ($resultContact->num_rows > 0) {
                                        while ($rowContact = $resultContact->fetch_assoc()) {
                                        ?>
                                            <div class="sl-item">
                                                <div class="sl-content">
                                                    <small class="text-muted" style="color: blue;"><?php echo date('F j, Y g:i A', strtotime($rowContact['created_at'])); ?></small>


                                                    <p>Message: <?php echo $rowContact['message']; ?></p>
                                                    <p style="font-size: smaller; font-weight: bold;">From: <?php echo $rowContact['first_name'] . ' ' . $rowContact['last_name']; ?></p>
                                                    <p style="font-size: smaller; font-style: italic;">Source: Contact Form</p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="sl-item">
                                            <div class="sl-content">
                                                <p>No contacts found.</p>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>

                <?php
                $sql = "SELECT * FROM delivery_partners WHERE status = 'active'";
                $result = mysqli_query($conn, $sql);
                $numRows = mysqli_num_rows($result);

                if ($numRows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <!-- <a href="<?php echo $row['partner_link'] ?>"><img src="images/<?php echo $row['partner_photo'] ?>" alt="<?php echo $row['partner_name'] ?>" style="width: 20%;"></a> -->
                <?php
                    }
                } else {
                    echo "No landing page content found.";
                }
                ?>

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