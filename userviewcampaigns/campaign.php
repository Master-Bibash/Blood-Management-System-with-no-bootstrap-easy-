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
  <!-- <script src="style.js"></script> -->
</head>


<body>

  <div class="sidebar close">
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
        <a href="/Final/user/userdashboard.php">
  <i class='bx bxs-dashboard'></i>
  <span class="link_name">Dashboard</span>
</a>


        </div>
        <ul class="nav-links">
            <li>
               <div class="iocn-link">
                  <a href="/final/user/userdashboard.php">
                  <i class='bx bxs-dashboard'></i>
                  <span class="link_name">Dashboard</span>
                  </a>
               </div>
               <ul class="sub-menu" >
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
               <div class="profile-details">
                  <div class="name-job">
                     <div class="profile_name">Name</div>
                     <div class="job">Donor</div>
                  </div>
                  <i class='bx bx-log-out'></i>
               </div>
            </li>
         </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <div class="header">
        <i class='bx bx-menu'></i>
        <span class="text">Blood  Donation Management System</span>


        <main class="table">

          <section class="table_header">
            <h1>Campaign Details</h1>
          </section>
          <section class="table__body">
            <table>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Customer</th>
                  <th>Location</th>
                  <th>Order</th>
                 <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>bibash</td>
                  <td>sindhuli</td>
                  <td>asdas</td>
                 <td class="status delivered">Deloverd on</td>
               
                 
                </tr>
                <tr>
                  <td>1</td>
                  <td>bibash</td>
                  <td>sindhuli</td>
                  <td>asdas</td>
                 <td class="status delivered">Deloverd on</td>
                 
                </tr>
              </tbody>
            </table>
          </section>
        </main>
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