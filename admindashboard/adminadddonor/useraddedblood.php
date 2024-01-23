<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "bin");

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    // Redirect the user to the login page if 'id' is not set in the session
    header("Location: userlogin.php");
    exit;
}

if (isset($_SESSION['success_message'])) {
    // echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    unset($_SESSION['success_message']); // Clear the success message from the session
}

// Get the user's previous collection date
$id = $_SESSION["id"];
$result = mysqli_query($con, "SELECT collection FROM donor WHERE id=$id");
$row = mysqli_fetch_assoc($result);
$previousCollectionDate = $row['collection'];

if (isset($_POST['submit'])) {
    // Fetch form data
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $bloodgroup = $_POST["bloodgroup"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $disease = $_POST["disease"];
    $contact = $_POST["contact"];
    $available = $_POST["available"]; // Retrieve the value of "available" field
    $collection = $_POST["collection"]; // Retrieve the value of "collection" field

    // Check if the collection date is not null and is not the same as the previous one
    if ($previousCollectionDate !== null) {
        $lastDate = new DateTime($previousCollectionDate);
        $today = new DateTime();
        $daysDifference = $today->diff($lastDate)->days;

        if ($collection !== $previousCollectionDate) {
            // Collection date has been changed by the user
            if ($daysDifference < 90) {
                // Collection date is not 90 days ago
            //  echo '<script>window.location.href = "donateblood.php";</script>';
             echo '<script>window.location.href = "donateblood.php";</script>';
             exit;
               
            } else {
                // Allow updating other fields including the collection date
                $update_sql = "UPDATE donor SET username = ?, gender = ?, dob = ?, bloodgroup = ?, email = ?, disease = ?, address = ?, contact = ?, available = ?, collection = ? WHERE id = ?";
                $stmt = mysqli_prepare($con, $update_sql);
                mysqli_stmt_bind_param($stmt, "ssssssssssi", $name, $gender, $dob, $bloodgroup, $email, $disease, $address, $contact, $available, $collection, $_SESSION['id']);
            
                if (mysqli_stmt_execute($stmt)) {
                    // Set a success message in the session
                    // $_SESSION['success_message'] = "Data successfully updated.";
                    // Redirect the user after the data is updated
                    header("Location: donatenow.php");
                    exit;
                } else {
                    // Display the error message if the update query fails
                    echo "ERROR: " . mysqli_error($con);
                }
            
                // Close the prepared statement
                mysqli_stmt_close($stmt);
            }
            
        } elseif ($collection === $previousCollectionDate) {
            // Collection date has not been changed, allow updating other fields
            $update_sql = "UPDATE donor SET username = ?, gender = ?, dob = ?, bloodgroup = ?, email = ?, disease = ?, address = ?, contact = ?, available = ?, collection = ? WHERE id = ?";
            $stmt = mysqli_prepare($con, $update_sql);
            mysqli_stmt_bind_param($stmt, "ssssssssssi", $name, $gender, $dob, $bloodgroup, $email, $disease, $address, $contact, $available, $collection, $_SESSION['id']);

            if (mysqli_stmt_execute($stmt)) {
                // Set a success message in the session
                // $_SESSION['success_message'] = "Data successfully updated.";
                // Display a JavaScript alert after the data is updated
                header("Location: donatenow.php");
                exit;
            } else {
                // Display the error message if the update query fails
                echo "ERROR: " . mysqli_error($con);
            }

            // Close the prepared statement
            mysqli_stmt_close($stmt);
        }
    } else {
        // If the collection date is null or it's the same as the previous one, update it in the database
        $update_sql = "UPDATE donor SET username = ?, gender = ?, dob = ?, bloodgroup = ?, email = ?, disease = ?, address = ?, contact = ?, available = ?, collection = ? WHERE id = ?";
        $stmt = mysqli_prepare($con, $update_sql);
        mysqli_stmt_bind_param($stmt, "ssssssssssi", $name, $gender, $dob, $bloodgroup, $email, $disease, $address, $contact, $available, $collection, $_SESSION['id']);

        if (mysqli_stmt_execute($stmt)) {
            // Set a success message in the session
            // $_SESSION['success_message'] = "Data successfully updated.";
            // Display a JavaScript alert after the data is updated
            // echo '<script>alert("Data has been updated.");</script>';
           header("Location: /final/user/userdashboard.php");

            exit;
        } else {
            // Display the error message if the update query fails
            echo "ERROR: " . mysqli_error($con);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

// Close the database connection
mysqli_close($con);
?>