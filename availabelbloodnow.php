<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="UTF-8">
     <title> Blood Donation Management System</title>
     <link rel="stylesheet" href="Sidebarstyle.css">
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- <script src="style.js"></script> -->
     <style>
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

     </div>
     <section class="home-section">


          <table class="customers" style="
    border: 1px solid #ddd;">
               <tr>
                    <?php
// Establish a database connection
$con = mysqli_connect("localhost", "root", "", "bin");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$qry = "SELECT * FROM donor";
$result = mysqli_query($con, $qry);
?>

                    <table class="customers">
                         <thead>
                              <tr>
                                   <th>Full Name</th>
                                   <th>Gender</th>
                                   <th>D.O.B</th>
                                   <th>Blood Group</th>
                                   <th>Email</th>
                                   <th>Disease</th>
                                   <th>Address</th>
                                   <th>Contact</th>
                                   <th>Collection Date</th>
                                   <th>Available</th>
                                   <th>Request</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <tr class='gradeA'>
                <td>" . $row['username'] . "</td>
                <td>" . $row['gender'] . "</td>
                <td>" . $row['dob'] . "</td>
                <td>" . $row['bloodgroup'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['disease'] . "</td>
                <td>" . $row['address'] . "</td>
                <td>" . $row['contact'] . "</td>
                <td>" . $row['collection'] . "</td>
                <td>" . $row['available'] . "</td>
                <td>
                    <button>
                        <a href='/Final/viewblood/requestblood.php?id=" . $row['id'] . "' style='text-decoration: none; color: black;'>Request blood</a>
                    </button>
                </td>
            </tr>";
        }
        ?>
                         </tbody>
                    </table>

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