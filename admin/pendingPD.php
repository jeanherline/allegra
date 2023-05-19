<?php
// require('secure.php');

if (isset($_GET['private_dining_id'])) {
    include("../db.php");

    $private_dining_id = $_GET['private_dining_id'];
    $query = "UPDATE private_dining SET status = 'Pending' WHERE private_dining_id = '$private_dining_id'";
    $result = mysqli_query($conn, $query);

    header('location: pdList.php');
}
