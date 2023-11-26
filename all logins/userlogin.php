<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<style>
    /* Add this CSS for error styling */
    .error-input {
        border: 1px solid red;
    }

    .error-message {
        font-size: 14px;
        color: red;
        margin-top: 5px;
    }
</style>

<body>
    <!-- ... (header and other HTML) ... -->

    <div class="center">
        <?php
        $con = mysqli_connect("localhost", "root", "", "bin");

        // Check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        if (isset($_POST['userlogin'])) {
            $username = mysqli_real_escape_string($con, $_POST['name']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            $query = mysqli_query($con, "SELECT * FROM donor WHERE password='$password' AND username='$username'");
            $row = mysqli_fetch_array($query);

            $num_row = mysqli_num_rows($query);

            if ($num_row > 0) {
                $_SESSION['id'] = $row['id'];
                header('location:/final/user/userdashboard.php');
            } else {
                // Display error message and apply error styling
                $error_message = "Invalid Username & Password.";
            }
        }
        ?>
        
        <!-- Display the error message and apply error styling -->
     

        <h1>Login</h1>
        <form action="#" method="post">
            <div class="txt_formfield">
                <input type="text" name="name" id="username" required placeholder="Username" class="<?php echo isset($error_message) ? 'error-input' : ''; ?>">
            </div>
            <div class="txt_formfield">
                <input type="password" name="password" class="form-control input_pass <?php echo isset($error_message) ? 'error-input' : ''; ?>" value="" placeholder="Password" required>
            </div>
            <span id="error-message" class="error-message"></span>
            <center>
            <?php if (isset($error_message)) : ?>
            <div class="error-message">
                <?php echo $error_message; ?>
            </div>

        <?php endif; ?>
            </center>
            <br>
            
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login" name="userlogin">
            <div class="signup_link">
                Not a member? <a href="signUp.html">Sign up</a>
            </div>
        </form>
    </div>

    <script>
        const errorMessage = document.querySelector('.error-message');
        const usernameInput = document.querySelector('[name="name"]');
        const passwordInput = document.querySelector('[name="password']');

        // Function to show error message and highlight input on form submission
        function displayErrorMessage() {
            errorMessage.textContent = 'Invalid Username & Password.';
            usernameInput.classList.add('error-input');
            passwordInput.classList.add('error-input');
        }

        // Reset error message and input border on input focus
        usernameInput.addEventListener('focus', function () {
            errorMessage.textContent = '';
            usernameInput.classList.remove('error-input');
        });

        passwordInput.addEventListener('focus', function () {
            errorMessage.textContent = '';
            passwordInput.classList.remove('error-input');
        });

        // Form submission validation
        document.querySelector('form').addEventListener('submit', function (e) {
            const username = usernameInput.value;
            const password = passwordInput.value;

            if (username === '' || password === '') {
                e.preventDefault(); // Prevent form submission if fields are empty
                displayErrorMessage();
            }
        });
    </script>
</body>

</html>
