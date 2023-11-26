<!DOCTYPE html>
<html lang="en">

<head>




</head>

<body>

    <div id="wrapper">

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
							$announcement = $_POST["announcement"];    
							$bloodneed = $_POST["bloodneed"];
							$dat = $_POST["dat"];
							$organizer = $_POST["organizer"];
							$requirements = $_POST["requirements"];

							$id=$_POST['id'];
							//update query
							$qry = "update announce set announcement='$announcement', bloodneed='$bloodneed', dat='$dat', organizer='$organizer', requirements='$requirements' where id='$id'";
							$result = mysqli_query($con,$qry); //query executes
							if(!$result){
								echo"ERROR". mysqli_error();
							}else {
								
                                        echo '<script>alert("The selected announcement has been updated."); window.location.href = "/Final/admindashboard/admindashboard.php";</script>';

								// header ("Location:editblood.php");
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


</style>

</html>
