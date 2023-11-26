<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "bin");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Use prepared statement to prevent SQL injection
    $qry = "DELETE FROM announce WHERE id = ?";
    $stmt = mysqli_prepare($con, $qry);
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "DELETED";
        echo "<script>
                alert('Successfully deleted');
                window.location='viewblood.php';
              </script>";
    } else {
        echo "ERROR!!";
    }
}
?>
