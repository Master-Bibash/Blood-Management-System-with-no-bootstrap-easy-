<?php
// Retrieve form data using POST method
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$Cname = $_POST['Cname'];
$subject = $_POST['subject'];

// Create a database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "bin";

$con = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO contact (name, lastname, Cname, subject) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);

if ($stmt) {
    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "ssss", $name, $lastname, $Cname, $subject);
    if (mysqli_stmt_execute($stmt)) {
        // Data inserted successfully
        echo "<script>alert('Information sent to admin');</script>";
    } else {
        // Error executing the statement
        echo "Error: " . mysqli_error($con);
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
} else {
    // Error preparing the statement
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

<script>
     window.location.href = "/final/user/userdashboard.php";
</script>
</body>
</html>
