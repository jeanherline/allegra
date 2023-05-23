<?php
// require('secure.php');

if (isset($_GET['partner_id'])) {
    include("../db.php");

    $partner_id = $_GET['partner_id'];
    $query = "UPDATE delivery_partners SET status = 'Archived' WHERE partner_id = '$partner_id'";
    $result = mysqli_query($conn, $query);

    header('location: deliveryPartners.php');
}
