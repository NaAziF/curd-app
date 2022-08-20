<?php 
session_start();
if(isset($_POST['email'])){
$email=$_POST['email'];
$_SESSION['email']=$email;
$otp=rand(1000,9999);
$sub="OTP to Reset Password";
$_SESSION['otp']=$otp;

mail($email, $sub, $otp);
header("Location:otpverify.php");

}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <h1>Reset Password!</h1>
    <form method="POST" action="resetpass.php">
 <div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping">Email</span>
  <input type="email" name="email" class="form-control" placeholder="E-Mail" aria-label="Username" aria-describedby="addon-wrapping">
</div><br>
<button type="submit" class="btn btn-danger btn-lg">Reset</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>