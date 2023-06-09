<?php
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('../secure.php');
require('../db.php');

if (isset($_GET['private_dining_id'])) {
    $private_dining_id = $_GET['private_dining_id'];
    $query = "UPDATE private_dining SET status = 'Done' WHERE private_dining_id = '$private_dining_id'";
    $result = mysqli_query($conn, $query);

    // Fetch customer details
    $query = "SELECT email, first_name, last_name FROM private_dining WHERE private_dining_id = '$private_dining_id'";
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
        $mail->Subject = 'Thank You for Your Private Dining Experience with Cafe Allegra';
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
                    Thank you for choosing Cafe Allegra for your private dining experience. We hope you had a successful and fun time dining with us.
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

        if ($mail->send()) {
            echo '<script>window.location.href = "pdList.php";</script>';
            exit();
        } else {
            echo 'Error sending email: ', $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo 'Error sending email: ', $e->getMessage();
    }
}
