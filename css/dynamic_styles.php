<?php
include('db.php');

$company_id = 1; // Assuming you want to fetch company data with ID 1

// Prepare a parameterized query to prevent SQL injection
$sql = "SELECT * FROM company WHERE company_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $company_id);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $color_theme = $row['color_theme'];
  $fixed_header = $row['fixed_header'];

  // Close the prepared statement and database connection
  $stmt->close();
} else {
  // Handle the case when no company data is found
  $color_theme = "#ffffff"; // Set a default color theme
  $fixed_header = "fixed_header.jpg"; // Set a default fixed header image
}
?>

<style>
  .newsletter {
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.7)), to(rgba(0, 0, 0, 0.7))), url(images/<?php echo $fixed_header ?>) no-repeat;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(images/<?php echo $fixed_header ?>) no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
  }

  html::-webkit-scrollbar-thumb {
    background: <?php echo $color_theme ?>;
  }

  .link-btn {
    margin-top: 1rem;
    padding: 1rem 3rem;
    display: inline-block;
    border: 0.1rem solid <?php echo $color_theme ?>;
    color: <?php echo $color_theme ?>;
    background: none;
    cursor: pointer;
    font-size: 1.7rem;
  }

  .link-btn:hover {
    background: <?php echo $color_theme ?>;
    color: #fff;
  }

  .header.active {
    padding: 2rem 0;
    background: <?php echo $color_theme ?>;
  }

  .login-form form .logo {
    font-size: 2.5rem;
    color: <?php echo $color_theme ?>;
    font-weight: bolder;
  }

  .login-form form .box {
    width: 100%;
    padding: 1.2rem 1.4rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    font-size: 1.6rem;
    margin: 1rem 0;
  }

  .login-form form .flex a {
    font-size: 1.5rem;
    color: <?php echo $color_theme ?>;
    margin-left: auto;
  }

  .login-form form .account a {
    color: <?php echo $color_theme ?>;
  }

  .about span {
    font-size: 2.5rem;
    color: <?php echo $color_theme ?>;
  }

  .about .icons-container .icons i {
    font-size: 4rem;
    margin-bottom: 1.5rem;
    color: <?php echo $color_theme ?>;
  }

  .gallery .box-container .box:hover {
    -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    border: 0.1rem solid <?php echo $color_theme ?>;
  }

  .reviews .box-container .box .stars i {
    font-size: 1.7rem;
    color: <?php echo $color_theme ?>;
  }

  .contact .contact-info-container .box {
    border: 0.1rem solid <?php echo $color_theme ?>;
    padding: 3rem 2rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    text-align: center;
  }

  .contact .contact-info-container .box:hover i {
    background: <?php echo $color_theme ?>;
    color: #fff;
  }

  .contact .contact-info-container .box i {
    height: 6rem;
    width: 6rem;
    line-height: 6rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    color: <?php echo $color_theme ?>;
    font-size: 2rem;
    margin-bottom: 1rem;
  }

  .contact form .box {
    margin: .7rem 0;
    border: 0.1rem solid <?php echo $color_theme ?>;
    font-size: 1.6rem;
    width: 100%;
    padding: 1.2rem 1.4rem;
  }

  .contact-2 .contact-info-container .box {
    border: 0.1rem solid <?php echo $color_theme ?>;
    padding: 3rem 2rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    text-align: center;
  }

  .contact-2 .contact-info-container .box:hover i {
    background: <?php echo $color_theme ?>;
    color: #eee;
  }

  .contact-2 .contact-info-container .box i {
    height: 6rem;
    width: 6rem;
    line-height: 6rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    color: <?php echo $color_theme ?>;
    font-size: 2rem;
    margin-bottom: 1rem;
  }

  .contact-2 form .box {
    margin: .7rem 0;
    border: 0.1rem solid <?php echo $color_theme ?>;
    font-size: 1.6rem;
    width: 100%;
    padding: 1.2rem 1.4rem;
  }

  .blogs .box-container .box:hover .icons {
    border-top: 0.1rem solid <?php echo $color_theme ?>;
  }

  .blogs .box-container .box .icons span i {
    padding-right: .5rem;
    color: <?php echo $color_theme ?>;
  }

  .blogs .box-container .box:hover .icons {
    border-top: 0.1rem solid <?php echo $color_theme ?>;
  }

  .blogs .box-container .box .icons span i {
    padding-right: .5rem;
    color: <?php echo $color_theme ?>;
  }

  .blogs-2 .box-container .box:hover .icons {
    border-top: 0.1rem solid <?php echo $color_theme ?>;
  }

  .blogs .box-container .box .icons span i {
    padding-right: .5rem;
    color: <?php echo $color_theme ?>;
  }

  .footer .logo {
    font-size: 3rem;
    color: <?php echo $color_theme ?>;
    font-weight: bolder;
  }

  .footer .share a {
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border: 0.1rem solid <?php echo $color_theme ?>;
    color: <?php echo $color_theme ?>;
    margin: 0 .3rem;
  }

  .footer .share a:hover {
    background: <?php echo $color_theme ?>;
    color: #fff;
  }

  .title h1 {
    color: <?php echo $color_theme ?>;
    text-align: center;
    font-weight: 800;
    font-size: 36px;
    letter-spacing: 1px;
  }

  .filter-btn {
    background: none;
    cursor: pointer;
    border: none;
    font-family: inherit;
    text-transform: uppercase;
    display: inline-block;
    margin: 10px 30px;
    font-size: 16px;
    color: <?php echo $color_theme ?>;
    font-weight: 600;
    letter-spacing: 2px;
    position: relative;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
  }

  tr:hover td {
    color: <?php echo $color_theme ?>;
    cursor: pointer;
    background-color: #ffffff;
  }
</style>