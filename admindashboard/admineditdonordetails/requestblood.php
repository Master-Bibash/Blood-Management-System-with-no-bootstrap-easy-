<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood   Management System</title>
     <link rel="stylesheet" href="Sidebarstyleedit.css">
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
                    <a href="/Final/admindashboard/adminadddonor/donatenow.php">
                         <i class='bx bx-pie-chart-alt-2'></i>
                         <span class="link_name">Add Donor</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/adminadddonor/donatenow.php">Add
                                   Donor</a></li>
                    </ul>
               </li>

               <li>
                    <a href="/Final/admindashboard/adminviewDonorDetails/viewblood.php">
                         <i class='bx bx-pie-chart-alt-2'></i>
                         <span class="link_name">View Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/adminviewDonorDetails/viewblood.php">View
                                   Donor Details</a></li>
                    </ul>
               </li>
               <li>
                    <a href="/Final/admindashboard/admineditdonordetails/viewblood.php">
                         <i class='bx bx-line-chart'></i>
                         <span class="link_name">Edit Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name" href="/Final/admindashboard/admineditdonordetails/viewblood.php">Edit
                                   Donor Details</a></li>
                    </ul>
               </li>
               <li>
               <li>
                    <a href="/Final/admindashboard/adminDeleteDonorDetails/viewblood.php">
                         <i class='bx bx-line-chart'></i>
                         <span class="link_name">Delete Donor Details</span>
                    </a>
                    <ul class="sub-menu blank">
                         <li><a class="link_name"
                                   href="/Final/admindashboard/adminDeleteDonorDetails/viewblood.php">Delete Donor
                                   Details</a></li>
                    </ul>
               </li>
               <li>

                    <div class="iocn-link">
                         <a href="#">
                              <i class='bx bx-plug'></i>
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
                              <i class='bx bx-plug'></i>
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

                                   <i class='bx bx-log-out'></i>

                              </div>

                              <!-- /.col-lg-12 -->
                         </div>
                         <!-- /.row -->
                    </div>
               </div>
              

                    <div class="container" style="
                     margin-bottom: 10%;">
                         <header>Add Blood</header>
                         <form name="registrationForm" action="edit.php" method="post" onsubmit="return validateForm()">
               <div class="form first">
               <?php
   $con = mysqli_connect("localhost","root","","bin");
   
   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
   
     $id=$_GET['id'];
     $qry= "select * from donor where id='$id'";
     $result=mysqli_query($con,$qry);
     while($row=mysqli_fetch_array($result)){
     
     ?>
                    <div class="details personal">
                         <span class="title">Personal</span>
                         <div class="fields">

                              <div class="input-field">
                                   <label for="username">User-Name :</label>
                                   <input  placeholder="Harry Den" type="text"  name="name" type="text"
                         value='<?php echo $row['username']; ?>' required>
                              </div>
                              <div class="input-field">
                                   <label>Gender [ M/F ]</label>
                                   <input  placeholder="M for Male & F for Female" type="text"  name="gender"
                         value='<?php echo $row['gender']; ?>' required>
                              </div>
                              <div class="input-field">
                                   <label>Enter D.O.B</label>
                                            <input  type="date" name="dob"
                         value='<?php echo $row['dob']; ?>' required>
                              </div>
                              <div class="input-field">
                                   <label>Enter email address</label>
                                   <input  placeholder="@gmail.com" type="email"  name="email"
                         value='<?php echo $row['email']; ?>' required>
                              </div>

                     

                        

                              <div class="input-field">
                                   <label>Enter Contact Number</label>
                                   <input class="form-control" type="number" name="contact"
                         value='<?php echo $row['contact']; ?>' required>
                              </div>
                              <div class="input-field">
                                   <label>Enter Address</label>
                                            <input  type="text" placeholder="Full Address" name="address"
                         value='<?php echo $row['address']; ?>' required>
                              </div>
                          
                              <input type="hidden" name="id" value="<?php echo $row['id'];?>">

                         </div>
                    </div>

                    <div class="details ID">
                         <span class="title">Blood Details</span>
                         <div class="fields">
                              <div class="input-field">
                                   <label>Enter Blood Group</label>
                                   <input type="text" placeholder="Example: B+, O-, B-" name="bloodgroup"
                         value='<?php echo $row['bloodgroup']; ?>' required>
                              </div>
                          
                         
                        
                         </div>
                    </div>
               </div>
               <input class="btn btn-success" type="submit" value="Make changes">
          </form>
          <?php } ?>
                    </div>
                    <?php
            include 'footer.php'
            
            
            ?>


               </div>



        

          </div>

          </div>

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