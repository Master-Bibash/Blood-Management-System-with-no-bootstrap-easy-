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
<script>
 




<body>


  <section class="home-section">
    <div class="home-content">
      <div class="header">
        <i class='bx bx-menu'></i>
        <span class="text">Blood  Donation Management System</span>
      </div>
      
      <div class="container">
        <header>Donate Blood </header>
        <form action="" method="post">
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
                  <input placeholder="M for Male & F for Female" type="text" name="gender" required>
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
                  <label>Enter Collection Date</label>
                  <input type="date" name="dob" required>
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
                  <input type="text" placeholder="Example: B+, O-, B-" name="bloodgroup" required>
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
                  <input type="text" placeholder="disease name or no" name="disease" required>
                </div>


              </div>
            </div>
          </div>
          <input class="Reg" type="submit" value="Donate Blood Now">
        </form>
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