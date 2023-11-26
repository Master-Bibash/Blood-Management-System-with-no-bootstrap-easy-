<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood Management System </title>
     <link rel="stylesheet" href="/final/about us/Sidebarstyle.css">

</head>


<body>

     <div class="sidebar close">
        
     </div>
     <section class="home-section">
          <div class="home-content">
               <div class="header">
                    <i class='bx bx-menu'></i>
                    <span class="text">Blood Management System</span>

                    <div class="heading">
                         <h1>About Us</h1>
                         <p>Blood Management System Project</p>

                    </div>
                    <section class="about-us">
                         <img src="samul.jpg" alt="" srcset="">
                         <div class="content">
                              <h2>About us </h2>
                              <p>
                                   Welcome to Blood Management System, where we are committed to transforming lives
                                   through the act of blood donation. Our journey began in 2023 with a mission to make
                                   blood donations more accessible and, in doing so, save lives. We understand the
                                   critical need for blood in medical emergencies and aim to bridge the gap between
                                   donors and recipients. Our platform not only enables individuals to donate blood but
                                   also keeps you informed about ongoing blood projects and campaigns in your area. We
                                   believe in the strength of community, compassion, and giving, and we invite you to be
                                   part of our mission to save lives. By choosing our site, you're taking a step towards
                                   making a tangible and life-saving impact on your community and beyond. Join us in
                                   this life-changing journey."
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