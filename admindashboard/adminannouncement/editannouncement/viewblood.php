<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood  Management System</title>
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- <script src="style.js"></script> -->
     <style>
          .sidebar .nav-links li .sub-menu {
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
          table.customers {
               margin-top: 2%;
               border-collapse: collapse;
               width: 100%;
               border: 1px solid #ddd;
               margin-bottom: 5%;
          }

          table.customers th,
          table.customers td {
               padding: 10px;
               text-align: left;
               border-bottom: 1px solid #ddd;
          }

          table.customers th {
               background-color: #f2f2f2;
          }

          table.customers tr:nth-child(even) {
               background-color: #f2f2f2;
          }

          table.customers tr:hover {
               background-color: #ddd;
          }

          button {
               height: 35px;
               width: 100%;
               border-radius: 10px;
               cursor: pointer;
          }

          button a {
               text-decoration: none;
               color: black;

          }

          button a:hover {
               color: red;
          }
     </style>

</head>


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
                    <i class='bx bx-menu'></i>
                    <span class="text">Blood  Donation Management System</span>
               </div>

               <table class="customers" style="
                                   border: 1px solid #ddd;">>
                    <tr>
                         <?php
                         // Establish a database connection
                         $con = mysqli_connect("localhost", "root", "", "bin");

                         // Check connection
                         if (mysqli_connect_errno()) {
                         echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }

                         $qry = "SELECT * FROM announce";
                         $result = mysqli_query($con, $qry);
                         ?>

                         <table class="customers">
                              <thead>
                                   <tr>
                                   <th>Title</th>
							<th>Blood Needed</th>
							<th>Announcement Date</th>
							<th>Organizer</th>
							<th>Requirements</th>
							<th><i class='fa fa-pencil'></i></th>
                                   </tr>
                              </thead>
                              <tbody>
                                   <?php
     while($row=mysqli_fetch_array($result)){
      echo"<tbody>
      <tr>
      <td>".$row['announcement']."</td>
      <td>".$row['bloodneed']."</td>
      <td>".$row['dat']."</td>
      <td>".$row['organizer']."</td>
      <td>".$row['requirements']."</td>
      <td><a href='editannouncement.php?id=".$row['id']."'><i class='fa fa-edit' style='color:green'></i></a></td>

    </tr>
    </tbody>";
    }
        ?>
                              </tbody>
                         </table>

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