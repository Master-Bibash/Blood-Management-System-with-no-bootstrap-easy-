<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "bin");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $qry = "delete from donor where id=$id";
    $result = mysqli_query($con, $qry);

    if ($result) {
        // Display an alert with the message "Data deleted" using JavaScript
        echo '<script>alert("Data deleted");</script>';
    } else {
        echo "ERROR!!";
    }

    // Redirect to the "Remove Blood" page (viewblood.php) after a delay
    header('refresh:3;url=/Final/admindashboard/admindeleteblood/viewblood.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
