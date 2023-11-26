<?php
session_start();
session_destroy();
echo "<script>alert('You have logged off');</script>";
header('Location: /Final/index.php');
exit();
// Make sure to exit after the header redirect
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     
</head>
<body>
     <script>
          echo "<script>alert('You have logged off');</script>";


     </script>
     
</body>
</html>