<!DOCTYPE html>
<html lang="en">

<head>



</head>

<body>

     <div id="wrapper">


       
               <!-- /.row -->
               <div class="row">
                 
                              <div class="panel-body">
                                   <div class="row">
                                        <div class="col-lg-6">
                                             <form role="form" action="index.php" method="post">
                                                  <?php 

if(isset($_POST['announcement'])){
$announcement = $_POST["announcement"];    
$bloodneed = $_POST["bloodneed"];
$dat = $_POST["dat"];
$organizer = $_POST["organizer"];
$requirements = $_POST["requirements"];


$con = mysqli_connect("localhost","root","","bin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


//code after connection is successfull
$qry = "insert into announce(announcement,bloodneed,dat,organizer,requirements) values ('$announcement','$bloodneed','$dat','$organizer','$requirements')";
$result = mysqli_query($con,$qry); //query executes

if(!$result){
    echo"ERROR";
}else {
     echo '<script>alert("Record added successfully."); window.location.href = "/Final/admindashboard/admindashboard.php";</script>';

 

}

}else{
    echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
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

     <!-- jQuery -->
     <script src="../vendor/jquery/jquery.min.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

     <!-- Metis Menu Plugin JavaScript -->
     <script src="../vendor/metisMenu/metisMenu.min.js"></script>

     <!-- Custom Theme JavaScript -->
     <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
     <p>&copy; <?php echo date("Y"); ?>Developed By Bibash,Sangita,Sindhu,Aman</p>
</footer>

<style>
footer {
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