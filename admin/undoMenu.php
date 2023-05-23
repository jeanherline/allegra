<?php
if (isset($_GET['menu_id'])) {
    include("../db.php");

    $menu_id = $_GET['menu_id'];
    $query = "UPDATE menu SET status = 'Active' WHERE menu_id = '$menu_id'";
    $result = mysqli_query($conn, $query);

    header('location: productList.php');
}
