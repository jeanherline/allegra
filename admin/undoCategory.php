<?php
require('../secure.php');

if (isset($_GET['category_id'])) {
    include("../db.php");

    $category_id = $_GET['category_id'];
    $query = "UPDATE category SET status = 'Active' WHERE category_id = '$category_id'";
    $result = mysqli_query($conn, $query);

    header('location: menuCategory.php');
}
