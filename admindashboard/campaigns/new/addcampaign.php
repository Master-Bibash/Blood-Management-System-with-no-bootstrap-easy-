



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
  

</head>

<body>

    <div id="wrapper">

    
           
            <?php 
            $con = mysqli_connect("localhost","root","","bin");

            // Check connection
            if (mysqli_connect_errno())
              {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }

if(isset($_POST['cname'])){
$cname = $_POST["cname"];    
$oname = $_POST["oname"];
$phn = $_POST["phn"];
$cdate = $_POST["cdate"];
$descp = $_POST["descp"];


//code after connection is successfull
$qry = "insert into campaigndb(cname,oname,phn,cdate,descp) values ('$cname','$oname','$phn','$cdate','$descp')";
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

</body>


	</style>

</html>
