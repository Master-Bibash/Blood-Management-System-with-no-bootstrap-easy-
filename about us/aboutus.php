<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood Donation  Management System</title>
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="style.js"></script>
</head>


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
                    <span class="text">Blood   Management System</span>

                    <div class="heading">
                         <h1>About Us</h1>
                         <p>Blood Donation Management SystemProject</p>

                    </div>
                    <section class="about-us">
                      <img src="samul.jpg" alt="" srcset="">
                      <div class="content">
                        <h2>About us </h2>
                        <p>
                        Welcome to Blood  Management System, where we are committed to transforming lives through the act of blood . Our journey began in 2023 with a mission to make blood s more accessible and, in doing so, save lives. We understand the critical need for blood in medical emergencies and aim to bridge the gap between donors and recipients. Our platform not only enables individuals to donate blood but also keeps you informed about ongoing blood projects and campaigns in your area. We believe in the strength of community, compassion, and giving, and we invite you to be part of our mission to save lives. By choosing our site, you're taking a step towards making a tangible and life-saving impact on your community and beyond. Join us in this life-changing journey."
                        </p>
                        <button class="read-more-btn">Read More</button>
                      </div>

                    </section>
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