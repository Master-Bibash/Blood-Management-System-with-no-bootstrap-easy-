<?php
session_start();

// Check if the user is logged in (change 'user_id' to match your session variable)
if (!isset($_SESSION['user_id'])) {
    // User is not logged in, redirect to the login page.
    header('Location: /Final/all logins/adminLogin.php');
    exit();
}
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<script>

</script>

<body>
     <div class="sidebar close">
     <ul class="nav-links">
               <li>
                    <div class="iocn-link">
                         <a href="/Final/admindashboard/admindashboard.php">
                              <i class='bx bxs-dashboard'></i>
                              <span class="link_name">Dashboard</span>
                         </a>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="/Final/admindashboard/admindashboard.php">Dashboard</a></li>
                    </ul>
               </li>
               <li>
                    <div class="iocn-link">
                         <a href="#">
                              <i class='bx bx-collection'></i>
                              <span class="link_name">View Blood Collection</span>
                         </a>
                         <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="#">View Blood Collection</a></li>
                         <li><a href="/Final/admindashboard/addBlood/donatenow.php">Add Blood</a></li>
                         <li><a href="/Final/admindashboard/adminviewblood/viewblood.php">View Blood</a></li>
                         <li><a href="/Final/admindashboard/admineditblood/viewblood.php">Edit Blood</a></li>
                         <li><a href="/Final/admindashboard/admindeleteblood/viewblood.php">Remove Blood</a></li>

                    </ul>
               </li>
               <li>
                    <a href="/Final/admindashboard/addBlood/donatenow.php">
                         <i class='bx bx-donate-blood'></i>
                         <span class="link_name">Add Donor</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/addBlood/donatenow.php">Add Donor</a></li>
                    </ul>
               </li>

               <li>
                    <a href="/Final/admindashboard/adminviewDonorDetails/viewblood.php">
                         <i class='bx bx-detail'></i>
                         <span class="link_name">View Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/adminviewDonorDetails/viewblood.php">View
                                   Donor Details</a></li>
                    </ul>
               </li>
               <li>
                    <a href="/Final/admindashboard/admineditdonordetails/viewblood.php">
                         <i class='bx bx-message-alt-edit'></i>
                         <span class="link_name">Edit Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/admineditdonordetails/viewblood.php">Edit
                                   Donor Details</a></li>
                    </ul>
               </li>
               <li>
               <li>
                    <a href="/Final/admindashboard/admindeleteblood/viewblood.php">
                         <i class='bx bxs-message-square-x'></i>
                         <span class="link_name">Delete Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/admindeleteblood/viewblood.php">Delete
                                   Donor Details</a></li>
                    </ul>
               </li>
               <li>

                    <div class="iocn-link">
                         <a href="#">
                              <i class='bx bx-notification'></i>
                              <span class="link_name">Announcements</span>
                         </a>
                         <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="#">Announcements</a></li>
                         <li><a href="/Final/admindashboard/adminannouncement/makeannouncement/donatenow.php">Make
                                   Announcements</a></li>
                         <li><a href="/Final/admindashboard/adminannouncement/viewannouncement/viewblood.php">View
                                   Announcements</a></li>
                         <li><a href="/Final/admindashboard/adminannouncement/editannouncement/viewblood.php">Edit
                                   Announcements</a></li>
                         <li><a href="/Final/admindashboard/adminannouncement/removeannouncement/viewblood.php">Remove
                                   Announcements</a></li>

                    </ul>
               </li>
               <li>

                    <div class="iocn-link">
                         <a href="#">
                              <i class='bx bx-plus-medical'></i>
                              <span class="link_name">Campaign</span>
                         </a>
                         <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                         <li><a class="link_name" href="#">Campaign</a></li>
                         <li><a href="/Final/admindashboard/campaigns/new/donatenow.php">New Campaign</a></li>
                         <li><a href="/Final/admindashboard/campaigns/view/viewblood.php">view Campaign</a></li>
                         <li><a href="/Final/admindashboard/campaigns/update/viewblood.php">Update Campaign</a></li>
                         <li><a href="/Final/admindashboard/campaigns/delete/viewblood.php">Delete Campaign</a></li>

                    </ul>
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
                                        Admin
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
               <div class="container" style="
                     margin-bottom: 10%;
                     margin-bottom: 20%;
                     ">
                    <header>Add Blood</header>
                    <form name="registrationForm" action="newuser.php" method="post" onsubmit="return validateForm()">
                         <div class="form first">
                              <div class="details personal">
                                   <span class="title">Personal</span>
                                   <div class="fields">

                                        <div class="input-field">
                                             <label for="username">User-Name :</label>
                                             <input placeholder="Harry Den" type="text" name="name" required>
                                        </div>
                                        <div class="input-field">
                                             <label>Enter Password</label>
                                             <input placeholder="Password" type="password" name="password" required>
                                        </div>

                                        <div class="input-field">
                                             <label>Enter email address</label>
                                             <input placeholder="@gmail.com" type="email" name="email" required>
                                        </div>

                                        <div class="input-field">
                                             <label>Gender [ M/F ]</label>
                                             <input placeholder="M for Male & F for Female" type="text" name="gender"
                                                  required>
                                        </div>

                                        <div class="input-field">
                                             <label>Enter D.O.B</label>
                                             <input type="date" name="dob" required>
                                        </div>

                                        <div class="input-field">
                                             <label>Enter Contact Number</label>
                                             <input class="form-control" type="number" name="contact" required>
                                        </div>
                                        <div class="input-field">
                                             <label>Enter Address</label>
                                             <input type="text" placeholder="Full Address" name="address" required>
                                        </div>


                                   </div>
                              </div>

                              <div class="details ID">
                                   <span class="title">Blood Details</span>
                                   <div class="fields">
                                        <div class="input-field">
                                             <label>Enter Blood Group</label>
                                             <input type="text" placeholder="Example: B+, O-, B-" name="bloodgroup"
                                                  required>
                                        </div>
                                        <div class="input-field">
                                             <label>Available or not</label>
                                             <select name="available">
                                                  <option value="yes">Yes</option>
                                                  <option value="no">No</option>
                                             </select>
                                        </div>
                                        <div class="input-field">
                                             <label>Any disease</label>
                                             <input type="text" placeholder="disease name or no" name="disease"
                                                  required>
                                        </div>


                                   </div>
                              </div>
                         </div>
                         <input class="btn btn-success" type="submit" value="Donate Now">
                    </form>
               </div>
          </div>

          </div>
          </div>
          </div>
          <?php
          include 'footer.php'
          
          
          ?>
     </section>

     <script>
     let arrow = document.querySelectorAll(".arrow");
     for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e) => {
               let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
               arrowParent.classList.toggle("showMenu");
          });
     }

     let sidebar = document.querySelector(".sidebar");
     let sidebarBtn = document.querySelector(".bx-menu");
     console.log(sidebarBtn);
     sidebarBtn.addEventListener("click", () => {
          sidebar.classList.toggle("close");
     });
     </script>

</body>

</html>