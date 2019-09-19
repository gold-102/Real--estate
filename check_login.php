<?php

require_once("db.php");

if(isset($_POST['login']))
{
   $username = $_REQUEST['username'];
   $password = $_REQUEST['password'];

   $q = "SELECT * FROM user_data WHERE email = '$username' OR mobile = '$username' AND password = '$password'";

   $query = mysqli_query($db, $q);
   $num = mysqli_num_rows($query);
   if($num == 1) {
       $_SESSION['username'] = $username;
       header("Location: index.php");
   }
   
}



?>