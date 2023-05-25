<?php
ob_start();
session_start();
include('db.php');

$username_err = $password_err = "";

// Get the current month and year
$currentMonthYear = date('Y-m');

// Update the visit count for the current month in the database
$sql = "INSERT INTO monthly_visits (month_year, visit_count)
        VALUES ('$currentMonthYear', 1)
        ON DUPLICATE KEY UPDATE visit_count = visit_count + 1";

$conn->query($sql);

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

include('css/dynamic_styles.php');

if (isset($_POST['login'])) {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Fetch account details from the database
    $stmt = $conn->prepare("SELECT * FROM admin_credentials WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // If an account is found
    if ($result->num_rows > 0) {
        $account = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $account['password'])) {
            // Password is correct, save the username to the session
            $_SESSION['username'] = $account['username'];
            $_SESSION['loggedin'] = TRUE;
            // Close the statement
            $stmt->close();

            // Close the connection
            $conn->close();

            // Redirect user to the welcome page
            header("Location: admin/dashboard.php");
            exit;
        } else {
            // Password is not valid
            $password_err = "The password you entered was not valid.";
        }
    } else {
        // No account found with that username
        $_SESSION['loggedin'] = FALSE;
        $username_err = "No account found with that username.";
    }

    // Close the statement
    $stmt->close();

    // Close the connection
    $conn->close();
}
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

    <!-- bannner  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        /* Login Form */
        .login-form {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1100;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-form form {
            width: 50rem;
            padding: 4rem;
            background: #fff;
            text-align: center;
            position: relative;
            animation: fadeIn .2s linear;
        }


        .login-form form .logo {
            font-size: 2.5rem;
            color: #512a10;
            font-weight: bolder;
        }

        .login-form form h3 {
            padding: 1rem 0;
            font-size: 1.7rem;
            text-transform: capitalize;
            color: #222;
            margin-top: 1rem;
        }

        .login-form form .box {
            width: 90%;
            padding: 0.3rem 1rem;
            border: 0.1rem solid #512a10;
            font-size: 1.3rem;
            /* Adjust the font size as desired */
            margin: 0.8rem 0;
        }

        .login-form form .flex {
            align-items: center;
            gap: 0.3rem;
            margin: 0.8rem 0;
            /* Adjust the margin values as desired */
        }

        .login-form form .flex label {
            font-size: 1.3rem;
            /* Adjust the font size as desired */
            line-height: 1.8;
            color: #666;
            margin-bottom: 0;
            cursor: pointer;
        }

        .login-form form .flex a {
            font-size: 1.3rem;
            /* Adjust the font size as desired */
            color: #512a10;
            margin-left: auto;
        }

        .login-form form .flex a:hover {
            text-decoration: underline !important;
        }

        .login-form form .link-btn {
            font-size: 16px;
            padding: 0.6rem 4rem;
            /* Adjust the padding values as desired */
            margin-bottom: 1rem;
            /* Adjust the margin value as desired */
        }


        .login-form form .account {
            padding: 1.5rem 0.5rem;
            background: #eee;
            font-size: 1.5rem;
            line-height: 2;
            color: #666;
            margin-bottom: 0;
        }

        .login-form form .account a {
            color: #512a10;
        }

        .login-form form .account a:hover {
            text-decoration: underline !important;
        }

        /* Header */
        .header {
            padding: 4rem 2rem;
        }

        .header.active {
            padding: 2rem;
        }

        .header #menu-btn {
            display: inline-block;
        }

        .header #menu-btn.fa-times {
            transform: rotate(180deg);
        }

        /* Navigation */
        .nav {
            position: absolute;
            top: 99%;
            left: 0;
            right: 0;
            background: #fff;
            flex-flow: column;
            padding: 1rem 0;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
        }

        .nav.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        .nav a {
            margin: 1rem 2rem;
            color: #000;
        }

        /* Contact Map */
        .contact .map {
            height: 25rem;
        }
    </style>

    <link rel="icon" href="images/<?php echo $logo_icon ?>" type="images" />
    <!-- login form starts -->

</head>

<body>
    <div class="login-form">
        <form action="" method="POST">
            <a href="#" class="logo mr-auto"><img width="25%" src="images/<?php echo $logo_orig ?>" alt=""></a>
            <h3>let's start a new great day!</h3>
            <input type="text" name="username" id="username" placeholder="Enter Username" class="box">
            <br>
            <input type="password" name="password" id="password" placeholder="Enter Password" class="box">
            <?php
            if (isset($password_err)) {
                echo '<p style="color: red;">' . $password_err . '</p>';
            }
            if (isset($username_err)) {
                echo '<p style="color: red;">' . $username_err . '</p>';
            }
            ?>
            <div class="flex">
            </div>
            <input type="submit" value="Login" id="login" name="login" class="link-btn">
            <!-- <p class="account">don't have an account? <a href="#">create one!</a></p> -->
        </form>
        <!-- rest of your code -->

    </div>

    <!-- login form ends -->
</body>

</html>