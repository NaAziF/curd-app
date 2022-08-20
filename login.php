<?php
session_start();
require 'db.php';
##################################################################
$userId=$_POST['userId'];
$pass=$_POST['userPasswordLogin'];
$pass=md5($pass);
$sql = "SELECT Name,UserID FROM Credentials WHERE Email='$userId' OR Phone_Number='$userId' AND Password='$pass'";
$result = mysqli_query($conn, $sql);
// echo"$sql";
if (mysqli_num_rows($result) > 0) {
//   output data of each row
  while($row = mysqli_fetch_assoc($result))  {
    $uid=$row["UserID"];
    $uname=$row["Name"];
    $_SESSION['uid']=$uid;
    $_SESSION['name']=$uname;
    header('Location:loggedin.php');
  }

} else {
  echo "<b style='color:red'>Error:Invalid Credentials<a href='index.php'>Try Again</a>";
}

?>
<?php
 mysqli_close($conn);
 ?>