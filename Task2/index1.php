<?php
/*
* iTech Empires:  Export Data from MySQL to CSV Script
* Version: 1.0.0
* Page: Index
*/

// Database Connection
require("db_connection.php");

// List Users
$query = "SELECT * FROM employeeinfo";
if (!$result = mysqli_query($con, $query)) {
    exit(mysqli_error($con));
}

if (mysqli_num_rows($result) > 0) {
    $number = 1;
    $users = '<table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Employee id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Reg Date</th>
        </tr>
    ';
    while ($row = mysqli_fetch_assoc($result)) {
        $users .= '<tr>
            <td>'.$number.'</td>
            <td>'.$row['emp_id'].'</td>
            <td>'.$row['firstname'].'</td>
            <td>'.$row['lastname'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['reg_date'].'</td>
        </tr>';
        $number++;
    }
    $users .= '</table>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Export Data from MySQL to CSV Tutorial | iTech Empires</title>
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
    <!--  Header  -->
    <div class="row">
        <div class="col-md-12">
            <h2>Export Data from MySQL to CSV</h2>
        </div>
    </div>
    <!--  /Header  -->

    <!--  Content   -->
    <div class="form-group">
        <?php echo $users ?>
    </div>
    <div class="form-group">
        <button onclick="Export()" class="btn btn-primary">Export to CSV File</button>
    </div>
    <!--  /Content   -->

    <script>
        function Export()
        {
            var conf = confirm("Export users to CSV?");
            if(conf == true)
            {
                window.open("export.php", '_blank');
            }
        }
    </script>
</div>
</body>
</html>