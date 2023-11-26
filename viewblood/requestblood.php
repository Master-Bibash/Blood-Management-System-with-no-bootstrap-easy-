<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Blood</title>
    <link rel="stylesheet" href="requestCss.css">
    <script src="https://kit.fontawesome.com/f55199d57e.js" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('background.jpg');
            background-size: cover;
        }

        .hero {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
        }

        .input-group {
            margin-bottom: 27px;
        }

        i {
            padding: 6px;
            margin: 0px 4px;
        }

        h1 {
            color: white;
            margin-bottom: 10%;
            font-weight: 900;
        }
    </style>
</head>

<body>

    <div class="hero">
        <form method="post" action="requestnow.php">
            <div class="heading">
                <h1>Request Blood Section</h1>
            </div>

            <div class="row">
                <div class="input-group">
                    <input type="text" required id="name" name="name">
                    <label for="name"><i class="far fa-user"></i>Enter Name</label>
                </div>
                <div class="input-group">
                    <input type="text" required id="phone" name="address">
                    <label for="phone"><i class="fas fa-location-crosshairs"></i>Enter Address</label>
                </div>
            </div>
            <div class="row">
                <?php
                // Check if the 'id' query parameter is set in the URL
                if (isset($_GET['id'])) {
                    // Retrieve the 'id' from the query parameter
                    $id = $_GET['id'];

                    // Include your database connection script
                    $con = mysqli_connect("localhost", "root", "", "bin");

                    // Query the database to retrieve donor information based on the ID
                    $qry = "SELECT * FROM donor WHERE id = $id";
                    $result = mysqli_query($con, $qry);
                    if ($row = mysqli_fetch_assoc($result)) {
                        // Display the donor information

                        // Pre-fill the "Requested" field
                        $bloodgroup = $row['bloodgroup'];
                        echo '<div class="input-group">
                            <input type="text" required id="Requested" name="bloodgroup" value="' . $bloodgroup . '">
                            <label for="Requested"><i class="fas fa-code-pull-request"></i>Request Blood</label>
                        </div>';
                    }
                }
                ?>
                <div class="input-group">
                    <input type="number" required id="Contact" name="contact">
                    <label for="Contact"><i class="fas fa-phone"></i>Contact Number</label>
                </div>
            </div>
            <div class="input-group">
                <input type="email" required id="email" name="email">
                <label for="email"><i class="far fa-envelope"></i>Email Id</label>
            </div>
            <div class="input-group">
                <textarea id="message" rows="8" name="reason" required type='text'></textarea>
                <label for="message"><i class="far fa-comment"></i>Enter Reason</label>
            </div>
            <input type="hidden" name="donor_id" value="<?php echo $id; ?>">

            <button type="submit">Submit Request <i class="far fa-paper-plane"></i></button>

        </form>

    </div>

</body>

</html>
