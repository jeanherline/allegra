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

        <table id="myTable" class="table table-striped table-bordered table-responsive table-hover">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Client Name</th>
                    <th>Country</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Anusha</td>
                    <td>India</td>
                    <td>10000</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Charles</td>
                    <td>United Kingdom</td>
                    <td>28000</td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Sravani</td>
                    <td>Australia</td>
                    <td>7000</td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Amar</td>
                    <td>India</td>
                    <td>18000</td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Lakshmi</td>
                    <td>India</td>
                    <td>12000</td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>James</td>
                    <td>Canada</td>
                    <td>50000</td>
                </tr>

                <tr>
                    <td>007</td>
                    <td>Ronald</td>
                    <td>US</td>
                    <td>75000</td>
                </tr>
                <tr>
                    <td>008</td>
                    <td>Mike</td>
                    <td>Belgium</td>
                    <td>100000</td>
                </tr>
                <tr>
                    <td>009</td>
                    <td>Andrew</td>
                    <td>Argentina</td>
                    <td>45000</td>
                </tr>

                <tr>
                    <td>010</td>
                    <td>Stephen</td>
                    <td>Austria</td>
                    <td>30000</td>
                </tr>
                <tr>
                    <td>011</td>
                    <td>Sara</td>
                    <td>China</td>
                    <td>750000</td>
                </tr>
                <tr>
                    <td>012</td>
                    <td>JonRoot</td>
                    <td>Argentina</td>
                    <td>65000</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#myTable').dataTable();
    });
</script>

</html>