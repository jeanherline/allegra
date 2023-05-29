<?php
session_start();
include('db.php');

// Check if the session variable for visit count is set and if the page has not been refreshed or navigated back
if (!isset($_SESSION['visit_count']) && !isset($_SERVER['HTTP_CACHE_CONTROL']) && !isset($_SERVER['HTTP_PRAGMA'])) {
   // Update the visit count for the current month in the database
   $currentMonthYear = date('Y-m');
   $sql = "INSERT INTO monthly_visits (month_year, visit_count)
            VALUES ('$currentMonthYear', 1)
            ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";
   $conn->query($sql);

   // Set the session variable for visit count to 1
   $_SESSION['visit_count'] = 1;
}

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
   <title>Cafe Allegra</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


   <!-- bannner  -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

   <!-- login form ends -->

   <!-- header section ends    -->

   <!-- home section starts  -->

   <?php
   $sql = "SELECT * FROM herobanner WHERE herobanner_id = 1";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $heading = $row['heading'];
      $subheading = $row['subheading'];
      $background_image = $row['background_image'];
      $button_text = $row['button_text'];
      $button_link = $row['button_link'];
   } else {
      echo "No landing page content found.";
   }
   ?>
   <section class="home" id="home">

      <div class="container">

         <div class="row align-items-center text-center text-md-left min-vh-100">
            <div class="col-md-6">
               <span><?php echo $heading ?></span>
               <h3><?php echo $subheading ?></h3>
               <a href="<?php echo $button_link ?>" class="link-btn"><?php echo $button_text ?></a>
            </div>
         </div>

      </div>
   </section>
   <style>
      .home {
         background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('images/<?php echo $background_image; ?>') no-repeat;
         background-size: cover;
         background-position: center;
         background-attachment: fixed;
      }
   </style>
   <!-- home section ends -->

   <div class="banner">
      <div class="banner__content">
         <div class="text-center">
            <div class="banner__text">
               <strong>Store Hours - </strong><?php echo $storehours ?>
            </div>
         </div>

      </div>
   </div>

   <?php
   $sql = "SELECT * FROM whychooseus WHERE whychooseus_id = 1";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $heading = $row['heading'];
      $subheading = $row['subheading'];
      $description = $row['description'];
      $index_photo = $row['index_photo'];

      // Get the first paragraph of the description
      $descriptionArray = preg_split('/<br(\s*\/?)>/', $description);
      $firstParagraph = $descriptionArray[0];
   } else {
      echo "No landing page content found.";
   }
   ?>

   <section class="about" id="about">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <img src="images/<?php echo htmlspecialchars($index_photo) ?>" class="w-100" alt="">
            </div>
            <div class="col-md-6">
               <span><?php echo htmlspecialchars($heading) ?></span>
               <h3 class="title"><?php echo htmlspecialchars($subheading) ?></h3>
               <p><?php echo htmlspecialchars($firstParagraph) ?></p>
               <a href="whychooseus.php" class="link-btn">Read More</a>
               <div class="icons-container">
                  <div class="icons">
                     <i class="fas fa-car"></i>
                     <h3><strong>FREE</strong> Parking</h3>
                  </div>
                  <div class="icons">
                     <i class="fas fa-wifi"></i>
                     <h3><strong>FREE</strong> WiFi for customers</h3>
                  </div>
                  <div class="icons">
                     <i class="fas fa-dog"></i>
                     <h3>Pet Friendly</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- menu section starts  -->

   <section class="menu" id="menu">

      <h1 class="heading"> our menu </h1>

      <div class="container box-container">
         <?php
         $sql = "SELECT * FROM menu WHERE status IN ('active')";

         $result = mysqli_query($conn, $sql);
         $numRows = mysqli_num_rows($result);

         $counter = 0; // Counter variable to keep track of displayed items

         if ($numRows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               $menuCategory = $row['category'];

               // Break out of loop after 6 items have been displayed
               if ($counter >= 6) {
                  break;
               }
               $counter++; // Increment counter

         ?>
               <div class="box <?php echo 'category-' . $menuCategory; ?>">
                  <img src="images/menu/<?php echo $row['menu_photo']; ?>" alt="">
                  <h3><?php echo $row['menu_name']; ?></h3>
                  <a class="link-btn-2" data-price="<?php echo $row['price']; ?>" data-image="<?php echo $row['menu_photo']; ?>" data-name="<?php echo $row['menu_name']; ?>">Available Today</a>
                  <p><?php echo $row['description']; ?></p>
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
               <h2><strong><span id="modal-menu-name"></span></strong></h2><br>
            </div>
            <div class="modal-body">
               <img src="" alt="" id="modal-image" width="50%"><br><br>
               <p style="font-size: 18px; color: green;">Price: </p>
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
                  var image = this.dataset.image;
                  var menuName = this.dataset.name;
                  document.getElementById("modal-price").innerHTML = price;
                  document.getElementById("modal-image").src = "images/menu/" + image;
                  document.getElementById("modal-menu-name").innerHTML = menuName;
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

      </div>
      <br>
      <div class="box-2">
         <center><a href="menu.php" class="link-btn">See More</a></center>
      </div>
   </section>

   <!-- menu section ends -->

   <!-- gallery section starts  -->

   <section class="gallery" id="gallery">

      <h1 class="heading"> our gallery </h1>

      <div class="box-container container">
         <?php
         $sql = "SELECT * FROM gallery";
         $result = mysqli_query($conn, $sql);
         $numRows = mysqli_num_rows($result);

         if ($numRows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
               <div class="box">
                  <img src="images/<?php echo $row['image']; ?>" alt="">
                  <div class="content">
                     <h3><?php echo $row['title']; ?></h3>
                     <p><?php echo $row['description']; ?></p>
                     <a href="<?php echo $row['link']; ?>" class="link-btn">See Post</a>
                  </div>
               </div>
         <?php
            }
         } else {
            echo "";
         }
         ?>
      </div>

   </section>

   <!-- gallery section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading">Featured Customer Reviews</h1>

      <div class="box-container container">
         <?php
         $sql = "SELECT * FROM review";
         $result = mysqli_query($conn, $sql);
         $numRows = mysqli_num_rows($result);

         if ($numRows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
         ?>
               <div class="box">
                  <img src="images/<?php echo $row['customer_photo']; ?>" alt="">
                  <h3><?php echo $row['customer_name']; ?></h3>
                  <p><?php echo $row['testimonial']; ?></p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
         <?php
            }
         } else {
            echo "";
         }
         ?>
      </div>

   </section>

   <!-- reviews section ends -->

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
                  <?php
                  if (!empty($facebook_link)) {
                  ?>
                     <a href="<?php echo $facebook_link ?>" class="fab fa-facebook-f"></a>

                  <?php
                  }
                  if (!empty($instagram_link)) {
                  ?>
                     <a href="<?php echo $instagram_link ?>" class="fab fa-instagram"></a>

                  <?php
                  }
                  if (!empty($twitter_link)) {
                  ?>
                     <a href="<?php echo $twitter_link ?>" class="fab fa-twitter"></a>

                  <?php
                  }
                  ?>
                  <br><br><br>
                  <?php

                  ?>
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

   <!-- The Modal -->
   <div id="storeHoursModal" class="modal">
      <div class="modal-content">
         <div class="modal-header">
            <h2>We're Currently Closed</h2>
            <span class="storeHoursClose">&times;</span>
         </div>
         <div class="modal-body">
            <p>We'll be back to serve you during our regular hours:<br>
               <?php echo $storehours ?><br>
               Meanwhile, feel free to browse our menu by clicking the "Hide" button.
            </p>
            <p>Thank you for your patience!</p>
         </div>
      </div>
   </div>

   <script>
      // Get the modal
      var storeHoursModal = document.getElementById("storeHoursModal");

      // Get the <span> element that closes the modal
      var storeHoursSpan = document.getElementsByClassName("storeHoursClose")[0];

      // When the user clicks on <span> (x), close the modal
      storeHoursSpan.onclick = function() {
         storeHoursModal.style.display = "none";
      }

      // Check if the current time is outside store hours
      function checkStoreHours() {
         const now = new Date();
         const day = now.getDay();
         const hour = now.getHours();

         // Check if it's a weekday
         const isWeekday = day >= 1 && day <= 5;
         const isWeekend = day === 0 || day === 6;

         // Get the opening and closing hours from the database
         const openingHour = parseInt("<?php echo date('H', strtotime($opening_time)); ?>");
         const closingHour = parseInt("<?php echo date('H', strtotime($closing_time)); ?>");

         // Check if the current time is outside store hours
         const outsideWeekdayHours = isWeekday && (hour < openingHour || hour >= closingHour);
         const outsideWeekendHours = isWeekend && (hour < openingHour || hour >= closingHour);

         // Check if modal was already shown
         if (!localStorage.getItem('storeHoursModalShown')) {
            if (outsideWeekdayHours || outsideWeekendHours) {
               storeHoursModal.style.display = "block";
               localStorage.setItem('storeHoursModalShown', true);
            }
         }
      }

      // Call the function to check store hours
      checkStoreHours();
   </script>

</body>

</html>