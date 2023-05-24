<?php
require('../secure.php');

if (isset($_GET['table_reservation_id'])) {
    include("../db.php");

    $table_reservation_id = $_GET['table_reservation_id'];
    $query = "UPDATE table_reservation SET status = 'Pending' WHERE table_reservation_id = '$table_reservation_id'";
    $result = mysqli_query($conn, $query);

    header('location: trList.php');
}
