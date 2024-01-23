<?php
session_start();
$con = mysqli_connect("localhost","root","","bin");

// print_r($_SESSION);
// echo "hello";
// if($_SESSION['id']){
//     echo("hellow");
//     var_dump($_SESSION['id']);
//     die;
// }

// Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }
//   if (!isset($_SESSION['id'])) {
//     echo "Session ID is not set!";
//     exit;
// }
if(isset($_SESSION['id'])){
   

}else{
    echo "Please login to continue";
    header('location:/Final/all logins/userlogin.php');
    exit();
}

$id = $_SESSION["id"];
$result = mysqli_query($con, "SELECT * FROM donor WHERE id=$id");
$row = mysqli_fetch_assoc($result);
if (!$result) {
    echo "Query failed: " . mysqli_error($con);
    exit;
}

if (mysqli_num_rows($result) == 0) {
    echo "No rows returned from the database!";
    exit;
}

$lastDonationDate = $row['collection']; // Assuming 'collection' is the name of the column in the database

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood Management System </title>
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="style.js"></script>
</head>
<style>
.upper {
     display: flex;
     justify-content: space-between;
     align-items: center;
}

.upper-f {

     display: flex;
     flex-direction: row;
     align-items: inherit;


}

.profile_name {
     display: flex;
     flex-direction: row;
     justify-content: space-around;
     font-family: 'Poppins', sans-serif;
     color: #eef3f7;
}

.profile_name p {
     margin-right: 10px;
     font-family: 'Poppins', sans-serif;
     color: #eef3f7;
}

.profile_name i {
     margin-right: 10px;
     font-family: 'Poppins', sans-serif;
     color: #eef3f7;
     cursor: pointer;
}
</style>

<body>
     <div class="sidebar close">
          <ul class="nav-links">
               <li>
                    <div class="iocn-link">
                         <a href="/final/user/userdashboard.php">
                              <i class='bx bxs-dashboard'></i>
                              <span class="link_name">Dashboard</span>
                         </a>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="/final/user/userdashboard.php">Dashboard</a></li>
                    </ul>
               </li>
               <li>
                    <div class="iocn-link">
                         <a href="/final/viewblood/viewblood.php">
                              <i class='bx bx-donate-blood'></i>
                              <span class="link_name">View Blood Collection</span>
                         </a>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="/final/viewblood/viewblood.php">View Blood Collection</a></li>
                    </ul>
               </li>
               <li>
                    <a href="/final/announcement/announcement.php">
                         <i class='bx bxs-notification'></i>
                         <span class="link_name">Announcement</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/final/announcement/announcement.php">Announcement</a></li>
                    </ul>
               </li>
               <li>
                    <div class="iocn-link">
                         <a href="/final/campaign/campaign.php">
                              <i class='bx bxs-flag-alt'></i>
                              <span class="link_name">Campaign</span>
                         </a>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="/final/campaign/campaign.php">Campaign</a></li>
                    </ul>
               </li>
               <li>
                    <a href="/final/about us/aboutus.php">
                         <i class='bx bx-info-circle'></i>
                         <span class="link_name">About Us</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/final/about us/aboutus.php">About Us</a></li>
                    </ul>
               </li>
               <li>
                    <a href="/final/contactus/contactus.php">
                         <i class='bx bxs-contact'></i>
                         <span class="link_name">Contact</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/final/contactus/contactus.php">Contact</a></li>
                    </ul>
               </li>
               <li>

     </div>
     </li>
     </ul>
     </div>
     <section class="home-section">
          <div class="home-content">
               <div class="header">

                    <div class="upper">
                         <div class="upper-f">
                              <i class='bx bx-menu'></i>
                              <span class="text">Blood Management System</span>
                         </div>
                         <div class="uppfer-s">
                              <div class="profile_name" style="
                 
                                       align-items: center;">
                                   <p>Welcome
                                        <?php echo $row["username"]; ?>
                                   </p>
                                   <i class='bx bx-log-out'></i>

                              </div>

                              <!-- /.col-lg-12 -->
                         </div>
                         <!-- /.row -->
                    </div>
               </div>
               <div class="table-content">
                    <div id="page-wrapper">
                         <div class="row">
                              <div class="col-lg-12">
                                   <h1 class="page-header">Donate Blood Section</h1>
                              </div>
                         </div>
                    </div>
                    <h1>k cha </h1>
                    <form action="useraddedblood.php" method="POST" id="bloodDonationForm">

                         <div class="main-user-info">
                              <div class="form-group">
                                   <label>Enter Full Name</label>
                                   <input class="form-control" placeholder="Harry Den" type="text" name="name"
                                        value="<?php echo $row['username']; ?>" required>

                              </div>
                              <div class="form-group">
                                   <label>Gender [ M/F ]</label>
                                   <input class="form-control" placeholder="M for Male & F for Female" type="text"
                                        name="gender" value="<?php echo $row['gender']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Enter D.O.B</label>
                                   <input class="form-control" type="date" name="dob" value="<?php echo $row['dob']; ?>"
                                        required>
                              </div>
                              <div class="form-group">
                                   <label>Enter Email</label>
                                   <input class="form-control" type="email" placeholder="email" name="email"
                                        value="<?php echo $row['email']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Any disease</label>
                                   <input class="form-control" type="text" placeholder="disease name or no"
                                        name="disease" value="<?php echo $row['disease']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Enter Blood Group</label>
                                   <input class="form-control" type="text" placeholder="Example: B+, O-, B-"
                                        name="bloodgroup" value="<?php echo $row['bloodgroup']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Enter Address</label>
                                   <input class="form-control" type="text" placeholder="Full Address" name="address"
                                        value="<?php echo $row['address']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Enter Contact Number</label>
                                   <input class="form-control" type="number" name="contact"
                                        value="<?php echo $row['contact']; ?>" required>
                              </div>
                              <div class="form-group">
                                   <label>Collection Date</label>
                                   <input class="form-control" type="date" name="collection" id="collectionDate"
                                        value="<?php echo $row['collection']; ?>" required>
                                   <span id="dateErrorMessage" style="color: red;"></span>
                              </div>

                              <div class="form-group">
                                   <label>Available:</label>
                                   <div class="select-box">
                                        <select class="form-control" name="available" required>
                                             <option value="Yes"
                                                  <?php if ($row['available'] === 'Yes') echo 'selected'; ?>>Yes
                                             </option>
                                             <option value="No"
                                                  <?php if ($row['available'] === 'No') echo 'selected'; ?>>No</option>
                                        </select>
                                   </div>
                              </div>

                              <button type="submit" class="btn btn-success" name="submit"
                                   id="submitButton">Submit</button>
                         </div>
                    </form>
               </div>
          </div>

          </div>
          <?php
include 'footer.php';
?>
     </section>
     <script>
     const collectionDateInput = document.getElementById("collectionDate");
     const dateErrorMessage = document.getElementById("dateErrorMessage");
     const submitButton = document.getElementById("submitButton");
     const previousCollectionDate = "<?php echo $lastDonationDate; ?>";

     collectionDateInput.addEventListener("change", function() {
          const newCollectionDate = this.value;

          // Check if the newCollectionDate is not empty (null or empty string)
          if (newCollectionDate.trim() !== '') {
               const ninetyDaysAgo = new Date();
               ninetyDaysAgo.setDate(ninetyDaysAgo.getDate() - 90);
               const inputtedDate = new Date(newCollectionDate);

               // Check if the previousCollectionDate is not empty (null or empty string)
               if (previousCollectionDate.trim() !== '') {
                    const lastDonationDate = new Date(previousCollectionDate);
                    if (inputtedDate >= lastDonationDate) {
                         dateErrorMessage.textContent =
                              "You must wait at least 90 days between blood donations.";
                         this.value = previousCollectionDate;
                         submitButton.disabled = true;
                         submitButton.style.backgroundColor = "#ccc"; // Change button color
                         submitButton.style.cursor = "not-allowed"; // Change cursor
                    } else {
                         dateErrorMessage.textContent = "";
                         submitButton.disabled = false;
                         submitButton.style.backgroundColor = ""; // Reset button color
                         submitButton.style.cursor = ""; // Reset cursor
                    }
               } else {
                    dateErrorMessage.textContent = "";
                    submitButton.disabled = false;
                    submitButton.style.backgroundColor = ""; // Reset button color
                    submitButton.style.cursor = ""; // Reset cursor
               }
          } else {
               dateErrorMessage.textContent = "";
               submitButton.disabled = false;
               submitButton.style.backgroundColor = ""; // Reset button color
               submitButton.style.cursor = ""; // Reset cursor
          }
     });
     </script>


</body>

</html>