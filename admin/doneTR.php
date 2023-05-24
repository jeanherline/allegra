<?php
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../secure.php');

if (isset($_GET['table_reservation_id'])) {
    include("../db.php");

    $table_reservation_id = $_GET['table_reservation_id'];
    $query = "UPDATE table_reservation SET status = 'Done' WHERE table_reservation_id = '$table_reservation_id'";
    $result = mysqli_query($conn, $query);

    // Fetch customer details
    $query = "SELECT email, first_name, last_name FROM table_reservation WHERE table_reservation_id = '$table_reservation_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $fname = $row['first_name'];
    $lname = $row['last_name'];

    // Send the thank you email
    $mail = new PHPMailer(true);

    try {
        // Customer email
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jeanherlinesantiago0329@gmail.com';
        $mail->Password = 'fkryponqryuezjte';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('noreply@cafeallegra.com', 'Cafe Allegra');
        $mail->addAddress($email);
        $mail->addCustomHeader('X-Priority', '1');
        $mail->addCustomHeader('Importance', 'High');
        $mail->isHTML(true); // Set email as HTML
        $mail->Subject = 'Thank You for Your Table Reservation Experience with Cafe Allegra';
        $mail->Body = "
        <html>
            <head>
                <style>
                    body {
                        font-family: Times New Roman, serif;
                        font-size: 16px;
                        line-height: 1.5;
                        color: #444;
                    }
                </style>
            </head>
            <body>
                <p>
                </p>
                <h1 style='font-size: 24px; font-family: Georgia, serif; color: #444;'>Good day, $fname $lname!</h1>
                <p>
                    Thank you for choosing Cafe Allegra for your table reservation experience. We hope you had a successful and fun time dining with us.
                </p>
                <p>
                    We appreciate your support and the opportunity to serve you. Your satisfaction is our top priority, and we're delighted to hear that you enjoyed our services.
                </p>
                <p>
                    We look forward to welcoming you back in the future for more memorable dining experiences at Cafe Allegra.
                </p>

                <p>
                    Sincerely,
                </p>

                <p>
                    The Cafe Allegra Team
                </p>
            </body>
        </html>
    ";

        $mail->send();
        echo '<script>window.location.href = "trList.php";</script>';
        exit();
    } catch (Exception $e) {
        echo 'Error sending email: ', $mail->ErrorInfo;
    }
}
