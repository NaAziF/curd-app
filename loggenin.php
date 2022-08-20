<?php
session_start();
if (isset($_SESSION['uid'])){
    // echo "logged in";
    $uid=$_SESSION['uid'];
    $uname=$_SESSION['name'];
      } else{
    header('Location:index.php');
}




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Control Panel </title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kriova</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about</a>
        </li>
       
         
        <li class="nav-item">
          <a class="nav-link disabled">User-ID:<?php echo" $uid";?></a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="killSession.php">
        <?php echo "<b>$uname<b>" ?>
        <button class="btn btn-outline-success" type="submit">  LogOut</button>
      </form>
    </div>
  </div>
</nav>
</body>
</html>