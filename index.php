<?php
session_start();
if (isset($_SESSION['uid'])){
    header('Location:loggedin.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kriova</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div id="signUpDiv" class="container">
    <h1 align="center">Please SignUp</h1>
    <form method="POST" action="signup.php" id="signUpForm" onsubmit="return inputValidator(event)">
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="userName" id="inputName3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="userEmail" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="userPhone" id="inputPhone">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="userPassword" id="inputPassword3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword2">
    </div>
  </div>
  

  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
     <br>
     Already have an Account LogIn <a href="#" onclick="hideSignUp('signUpDiv','logInDiv')">Here</a><br>
     <div id="warning" class="my-3" style="color:Red;">
</div>

      <button type="submit"  id="signUpBtn" class="btn btn-primary" align="center">Sign Up</button>
    </div>
  
  </div>
  <!-- <button type="submit" class="btn btn-primary" align="center">Sign Up</button> -->
</form>
</div>

<div id="logInDiv" class="container">
<h1 align="center">Please LogIn</h1>
    <form method="POST" action="login.php" id="logInForm" onsubmit="return loginValidator(event)">
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="userId" id="loginEmail">
    </div>
    </div>
   
    <div class="row mb-3">
    <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="userPasswordLogin" id="loginPassword">
    </div>
  </div>

  
  
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
     <br>
     Don't have an Account SignUp <a href="#" onclick="hideSignUp('logInDiv','signUpDiv')">Here</a><br>
     <a href="resetpass.php">Reset Password</a>
     <div id="warning-2" class="my-3" style="color:Red;"><?php
      if (isset($_SESSION['Msg'])){
   echo $_SESSION['Msg'];

      }
      ?></div>

      <button type="submit"  id="logInBtn" class="btn btn-primary" align="center">LogIn</button>
    </div>
  
  </div>
  </div>

  

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>