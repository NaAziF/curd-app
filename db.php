<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $database='test';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
//    echo '';
  





?>