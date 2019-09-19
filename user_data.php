<?php
require_once ('db.php');

if(isset($_POST['submit'])) {

    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];

    $q = "SELECT 'email', 'mobile' FROM user_data WHERE email = '$email' OR mobile = '$mobile'";

    $result = mysqli_query($db, $q);
    $num = mysqli_num_rows($result);

    if($num == 1) {
        echo "data already exists";
    }
    else {
        $qy = "INSERT INTO user_data(mobile, email, password, confirm_password) VALUES ('$mobile', 
        '$email', '$password', '$confirm_password')";

        mysqli_query($db, $qy);
    }
}



?>