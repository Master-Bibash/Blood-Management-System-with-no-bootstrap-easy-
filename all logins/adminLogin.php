<?php
session_start();

// Check if the user is already logged in; if yes, redirect to the dashboard
if (isset($_SESSION['user_id'])) {
    header('Location: /Final/admindashboard/admindashboard.php');
    // Update the path
    exit();
}

// Check if the login form is submitted
if (isset($_POST['login'])) {
    // Database connection (modify this according to your database settings)
    $con = mysqli_connect("localhost", "root", "", "bin");

    if (!$con) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    $username = mysqli_real_escape_string($con, $_POST['user']);
    $password = mysqli_real_escape_string($con, $_POST['pass']);

    // Use prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($con, "SELECT id FROM admin WHERE name=? AND password=?");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    mysqli_stmt_execute($stmt);

    // Get the result set
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        header('Location: /Final/admindashboard/admindashboard.php');
        // Update the path
        exit();
    } else {
        $loginError = 'Username & Password did not match! Try Again.';
    }

    // Close the database connection.
    mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
     <link rel="stylesheet" href="loginstyle.css">
     <style>
   #submit {
            margin-bottom: 50px;
        }
        .error-message {
            color: red;
        }
     </style>

</head>
<body>
<script>
        // JavaScript code to show or hide the login error message
        window.addEventListener("DOMContentLoaded", function () {
            let loginError = "<?php echo isset($loginError) ? $loginError : ''; ?>";
            if (loginError) {
                alert(loginError);
            }
        });
    </script>
     <header>
          <nav>
               <div class="logo">
                    <a href="/final/index.php"><img src="pngwing.com.png" alt="Logo" class="logo"></a>
               </div>
          </nav>
     </header>
     
     <div class="center">
        <h1 style="color: cornflowerblue;">Admin Login</h1>
        <form action="#" method="post">
            <div class="txt_formfield">
                <input name="user" type="text" autofocus>
                <span></span>
                <label for="username">Username</label>
            </div>
            <div class="txt_formfield">
                <input name="pass" type="password" value="">
                <span></span>
                <label for="password">Password</label>
            </div>
            <input type="submit" value="Login" id="submit" name="login">
        </form>
       
    </div>
</body>
     

</body>
</html>
