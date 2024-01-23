 <?php
session_start();
$con = mysqli_connect("localhost","root","","bin");

if(isset($_SESSION['id'])){
   

}else{
    echo '<script>alert("Please login to continue ");</script>';
    header('Location: /Final/all logins/userlogin.php');

    
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
if (isset($_SESSION['success_message'])) {
    // Display the success message
    echo '<script>alert("' . $_SESSION['success_message'] . '");</script>';
    // Clear the success message from the session to prevent displaying it again on refresh
    unset($_SESSION['success_message']);
}


?> 


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8">
   <title> Blood   Management System</title>
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

   .profile_name p{
      margin-right: 10px;
      font-family: 'Poppins', sans-serif;
    color: #eef3f7;
   }
   .profile_name i{
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
                  <span class="text">Blood  Donation Management System</span>
               </div>
               <div class="uppfer-s">
                  <div class="profile_name" style="
                 
                  align-items: center;">
                     <p>Welcome
                        <?php echo $row["username"]; ?>
                     </p>
                     <a href="\Final\logout.php" style="
                text-decoration: none;
                font-style: normal;
                font-family: cursive;
                color:white;
                font-weight: bold;"><i class='bx bx-log-out'></i>Logout</a>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
                  include 'donorsdashboard.php'
                  ?>
      </div>
      </div>
      </div>
      <?php
            include 'footer.php'
            
            
            ?>
   </section>
   <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".bx-menu");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
         sidebar.classList.toggle("close");
      });



   </script>
</body>

</html>