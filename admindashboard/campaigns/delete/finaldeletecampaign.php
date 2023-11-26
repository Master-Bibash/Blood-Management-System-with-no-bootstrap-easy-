<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

$con = mysqli_connect("localhost", "root", "", "bin");



$qry="delete from campaigndb where id=$id";
$result=mysqli_query($con,$qry);

if($result){
    echo"DELETED";
    echo "<script>
    alert('Successfully deleted');
    window.location='/Final/admindashboard/campaigns/view/viewblood.php';
  </script>";
}else{
    echo"ERROR!!";
}
}
?>