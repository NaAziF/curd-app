<?php
session_start();
require "db.php";
if(isset($_POST['newPass'])){
    $pass=$_POST['newPass'];
    $pass=md5($pass);
$email=$_SESSION['email'];
$sql = "UPDATE Credentials SET Password='$pass' WHERE Email='$email'";

if (mysqli_query($conn, $sql)) {
// session_destroy();
$_SESSION['Msg']="The Password was changed";
header('location:index.php');
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
} 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Enter new Password</h1>
    <form method="POST" action="newPassword.php">
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Password</span>
  <input type="text" class="form-control" placeholder="*******" aria-label="Username" name="newPass" aria-describedby="addon-wrapping">
</div><br>
<button class="btn btn-primary btn-lg" type="submit">Reset</button>


</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>