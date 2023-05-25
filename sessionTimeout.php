<?php
session_start();

include('db.php');

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
    <title>Session Timeout</title>

    <link rel="icon" href="images/<?php echo $logo_icon ?>" type="images" />

    <style media="screen">
        @import url("https://fonts.googleapis.com/css2?family=League+Spartan&display=swap");

        * {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none !important;
            -webkit-transition: all .2s linear;
            transition: all .2s linear;
        }

        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #1c1c1c;
        }

        .popup {
            background-color: #ffffff;
            width: 420px;
            padding: 30px 40px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            border-radius: 8px;
            display: none;
            text-align: center;
        }

        .popup button {
            display: block;
            margin: 0 0 20px auto;
            background-color: #512a10;
            font-size: 30px;
            color: #ffffff;
            border-radius: 100%;
            width: 40px;
            height: 40px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .popup h2 {
            margin-top: 20px;
        }

        .popup p {
            font-size: 14px;
            text-align: center;
            margin: 20px 0;
            line-height: 25px;

        }

        a {
            display: block;
            width: 150px;
            position: relative;
            margin: 10px auto;
            text-align: center;
            background-color: #512a10;
            border-radius: 20px;
            color: #ffffff;
            text-decoration: none;
            padding: 8px 0;
        }
    </style>
</head>

<body>
    <div class="popup">
        <h2>Session Timeout</h2>
        <p>
            Your session has expired due to inactivity. Please log in again to continue using the site.
        </p>
        <a href="logout.php">Okay</a>
    </div>
    <!--Script-->
    <script type="text/javascript">
        window.addEventListener("load", function() {
            setTimeout(
                function open(event) {
                    document.querySelector(".popup").style.display = "block";
                },
                2000
            )
        });


        document.querySelector("#close").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        });
    </script>
</body>

</html>