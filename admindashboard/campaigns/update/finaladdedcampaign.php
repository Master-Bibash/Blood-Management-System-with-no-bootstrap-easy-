<!DOCTYPE html>
<html lang="en">

<head>

   


</head>

<body>

    <div id="wrapper">


        <div id="page-wrapper">
            <div class="row">
              

<?php

$con = mysqli_connect("localhost","root","","bin");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$cname = $_POST["cname"];    
$oname = $_POST["oname"];
$phn = $_POST["phn"];
$cdate = $_POST["cdate"];
$descp = $_POST["descp"];
$id=$_POST['id'];
//update query
$qry = "update campaigndb set cname='$cname', oname='$oname', phn='$phn', cdate='$cdate', descp='$descp' where id='$id'";
$result = mysqli_query($con,$qry); //query executes
if(!$result){
    echo"ERROR". mysqli_error();
}else {
     echo '<script>alert("The selected campaign data has been updated."); window.location.href = "/Final/admindashboard/admindashboard.php";</script>';

    // header ("Location:editblood.php");
}
?>

                                  </form>
                                </div>
                                
                            
       
</html>
