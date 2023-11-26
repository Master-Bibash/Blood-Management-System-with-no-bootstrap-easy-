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
     <style>
     body {
          font-family: Arial, Helvetica, sans-serif;
     }

     * {
          box-sizing: border-box;
     }

     .contact-form {
          margin-top: 2%;
          max-width: none;
          margin: 0 auto;
          padding: 20px;
          background-color: #f2f2f2;
          border-radius: 5px;
     }

     .contact-form h3 {
          text-align: center;
     }

     .form-group {
          margin-bottom: 20px;
     }

     label {
          display: block;
          font-weight: bold;
     }

     input[type="text"],
     select,
     textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          resize: vertical;
     }

     input[type="submit"] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
     }

     input[type="submit"]:hover {
          background-color: #45a049;
     }
     </style>
     </style>
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
               <div class="header" style="
    margin-bottom: 2%;
">
                    <i class='bx bx-menu'></i>
                    <span class="text">Blood Management System</span>

               </div>
               <div class="contact-form">
                <h3>Contact Form</h3>
                <form action="contactForm.php" method="post">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your first name.." required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                    </div>
                    <div class="form-group">
                        <label for="Cname">Country Name</label>
                        <input type="text" id="Cname" name="Cname" placeholder="Your Country name.." required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
                    </div>
                    <input type="submit" value="Submit">
                </form>
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