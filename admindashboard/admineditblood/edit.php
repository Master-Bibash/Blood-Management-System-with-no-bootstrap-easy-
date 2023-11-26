

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>




</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BBMS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            MESSAGE BOX
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="#" method="post">


<?php
$con = mysqli_connect("localhost","root","","bin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


				$name = $_POST["name"];    
				$gender = $_POST["gender"];
				$dob = $_POST["dob"];
				$bloodgroup = $_POST["bloodgroup"];
				$email = $_POST["email"];
				$address = $_POST["address"];
				$contact = $_POST["contact"];
				$id=$_POST['id'];
				//update query
				$qry = "update donor set username='$name', gender='$gender', dob='$dob',  bloodgroup='$bloodgroup', email='$email', address='$address', contact='$contact' where id='$id'";
				$result = mysqli_query($con,$qry); //query executes

                    if (!$result) {
                         echo "ERROR " . mysqli_error();
                     } else {
                         echo "<script>alert('Successfully Updated'); window.location = '/Final/admindashboard/admineditblood/viewblood.php';</script>";
                     }
                     


?>

                                  </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Sangita,Sindhu,Aman,Bibash<</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
