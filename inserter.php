<?php

error_reporting(0);
    $ref=$_REQUEST['ref'];
    $get_id = $_REQUEST['get_id'];
    require_once ('db.php');

    



    $query = mysqli_query($db, "SELECT * FROM user_data WHERE email = '".$_SESSION['username']."' OR mobile = '".$_SESSION['username']."'");

    $num = mysqli_num_rows($query);
    if($num>0) {
        while($u=mysqli_fetch_assoc($query)) {
            $user_id = $u['id'];
        }
    }


    $e = "SELECT * FROM rent_house WHERE id = '$get_id'";

$qu = mysqli_query($db, $e);
$n = mysqli_num_rows($qu);

if($n > 0)  {

    while($b = mysqli_fetch_assoc($qu)) {


        $home_id = $b['id'];
    }
}


if(isset($_POST['submit'])) {

    $booking = $_REQUEST['booking'];
    $qy = "INSERT INTO booking_two(home_id, booking, user_id) VALUES ('$home_id', '$booking', '$user_id')";
    mysqli_query($db, $qy);
    
    header("Location: msg2.php");
}





?>