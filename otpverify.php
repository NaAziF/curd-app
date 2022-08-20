<?php
session_start();
require "db.php";
if(isset($_POST['userOtp'])){
$otpReal=$_SESSION['otp'];
$email=$_SESSION['email'];

$otpUser=$_POST['userOtp'];
echo "$otpReal here is the otp bcz mail system is not working";
if($otpReal==$otpUser){
    header("location:newPassword.php");
}else{
    echo "<div class='container'><b style='color:red;'>wrong otp</b></div>";

}



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
    <h1>Enter Otp sent to <?php echo $_SESSION['email']; ?></h1>
    <form method="POST" action="otpverify.php">
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">OTP</span>
  <input type="text" class="form-control" placeholder="OTP" aria-label="Username" name="userOtp" aria-describedby="addon-wrapping">
</div><br>
<button class="btn btn-primary btn-lg" type="submit">verify</button>


</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>