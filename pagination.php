<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Responsive Table</title>
    <meta name="description" content="Bootstrap.">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <style>
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
    </style>
</head>

<body style="margin:20px auto">
    <div class="container">
        <div class="row header" style="text-align:center;color:green">
            <h3>Gallery</h3>
        </div>

        <div class="header_fixed">
            <table id="myTable" class="table table-striped table-bordered table-responsive table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Availability</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('db.php');

                    $sql = "SELECT m.*, c.category_name FROM menu m INNER JOIN category c ON m.category = c.category_id";
                    $result = $conn->query($sql);
                    $numRows = mysqli_num_rows($result);

                    if ($numRows > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $menu_id = $row['menu_id'];
                            $menu_photo = $row['menu_photo'];
                            $menu_name = $row['menu_name'];
                            $description = $row['description'];
                            $price = $row['price'];
                            $category = $row['category_name'];
                            $availability = $row['availability'];
                            $status = $row['status'];
                    ?>
                            <tr>
                                <td><?php echo $menu_id ?></td>
                                <td><?php echo substr($menu_photo, 0, 10) . '...' ?></td>
                                <td><?php echo $menu_name ?></td>
                                <td><?php echo substr($description, 0, 30) . '...' ?></td>
                                <td><?php echo $price ?></td>
                                <td><?php echo $category ?></td>
                                <td><?php echo $availability ?></td>
                                <td><?php echo $status ?></td>
                                <td>
                                    <a href="editReview.php?review_id=<?php echo $review_id; ?>">
                                        <button>Edit</button>
                                    </a>
                                </td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo "";
                    }
                    mysqli_close($conn);
                    ?>

                </tbody>
            </table>
        </div>

    </div>
</body>
<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>

</html>