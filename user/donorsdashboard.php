<?php

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
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title> Blood   Management System</title>
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
</head>

<body>
     <div class="Donors">Donor's Dashboard</div>
     </div>
     <div class="container">
          <div class="item-1">
               <div class="zero" style="
               background-color: #5cb85c;
               height: auto" ;>
                    <div class="one">
                         <img src="blood-bag.png" alt="" width="90px">
                    </div>
                    <div class="two">
                         <div class="two_one">
                              <?php
                  

                     $servername="localhost";
                     $uname="root";
                     $pass="";
                     $db="bin";
                     
                     $conn=mysqli_connect($servername,$uname,$pass,$db);
                     
                     if(!$conn){
                         die("Connection Failed");
                     }
                     
                     $sql = "SELECT * FROM donor";
                                     $query = $conn->query($sql);
                     
                                     echo "<h1 style='color: white; font-size: 46px;'>" . $query->num_rows . "</h1>";

                     

?>







                         </div>
                         <div class="two_two">availbale blood</div>
                    </div>
               </div>
               <div class="second">
                    <div class="second_one">
                         <a href="/final/viewblood/viewblood.php" style="text-decoration:none">View available blood
                              details</a>
                    </div>
                    <div class="second_two">
                         <i class='bx bx-chevron-right'></i>
                    </div>
               </div>
          </div>
          <div class="item-2">
               <div class="zero" style="
               background-color: #a99468;
               height: auto" ;>
                    <div class="one">
                         <img src="red-flag.png" alt="" width="90px">
                    </div>
                    <div class="two">
                         <div class="two_one">

                         <?php
                  

                  $servername="localhost";
                  $uname="root";
                  $pass="";
                  $db="bin";
                  
                  $conn=mysqli_connect($servername,$uname,$pass,$db);
                  
                  if(!$conn){
                      die("Connection Failed");
                  }
                  
                  $sql = "SELECT * FROM campaigndb";
                                  $query = $conn->query($sql);
                  
                                  echo "<h1 style='color: white; font-size: 46px;'>" . $query->num_rows . "</h1>";

                  

?>


                         </div>
                         <div class="two_two">Campaign Made</div>
                    </div>
               </div>
               <div class="second">
                    <div class="second_one">
                         <a href="/final/campaign/campaign.php" style="text-decoration:none">View available
                              campaigns</a>
                    </div>
                    <div class="second_two">
                         <i class='bx bx-chevron-right'></i>
                    </div>
               </div>
          </div>
          <div class="item-3">
               <div class="zero" style="
               background-color: rebeccapurple;
               height: auto" ;>
                    <div class="one">
                         <img src="megaphone.png" alt="" width="90px">
                    </div>
                    <div class="two">
                         <div class="two_one">
                         <?php
                  

                  $servername="localhost";
                  $uname="root";
                  $pass="";
                  $db="bin";
                  
                  $conn=mysqli_connect($servername,$uname,$pass,$db);
                  
                  if(!$conn){
                      die("Connection Failed");
                  }
                  
                  $sql = "SELECT * FROM announce";
                                  $query = $conn->query($sql);
                  
                                  echo "<h1 style='color: white; font-size: 46px;'>" . $query->num_rows . "</h1>";

                  

?>

                         </div>
                         <div class="two_two">Announcement</div>
                    </div>
               </div>
               <div class="second">
                    <div class="second_one" style="color: rebeccapurple;">
                         <a href="/final/announcement/announcement.php" style="text-decoration:none">View announcement
                              details</a>
                    </div>
                    <div class="second_two">
                         <i class='bx bx-chevron-right'></i>
                    </div>
               </div>
          </div>
          <div class="item-4">
               <div class="zero" style="
               background-color: #d9534f;
               height: auto" ;>
                    <div class="one">
                         <img src="blood.png" alt="" style="background-color: #d9534f;">
                    </div>
                    <div class="third">
                         <div class="third-one">Donate</div>
                         <div class="third_two">Blood</div>
                    </div>
               </div>
               <div class="second">
                    <div class="second_one" style="color: #d9534f;">
                         <a href="/final/donate now/donatenow.php"
                              style="text-decoration: none; margin-left: 2px;">Donate Blood</a>
                    </div>
                    <div class="second_two">
                         <i class='bx bx-chevron-right'></i>
                    </div>
               </div>
          </div>
     </div>
     <div class="info-container">
          <!-- main container-->
          <div class="info-one">
               <!--second -->
               <div class="info-o">
                    <p> Why Donate blood?</p>
               </div>
               <div class="info-on">
                    <p> Blood  merits include saving <br>lives,
                         improving donor health,<br> fostering community responsibility,<br> emergency preparedness,
                         supporting<br> chronic illnesses, advancing medical research,<br> maintaining blood supplies,
                         <br>promoting awareness,<br> and enhancing the donor's well-being.
                    </p>
               </div>
          </div>
          <div class="info-two">
               <img src="donblood.jpg" alt="">
          </div>
     </div>
</body>

</html>