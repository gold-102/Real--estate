<?php

require_once ('db.php');

header('Location:contact.php');

if(isset($_POST['submit'])) {

    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    $q = "INSERT INTO contact_form(name, mobile, email, message) VALUES ('$name', '$mobile', '$email',  '$message')";

    mysqli_query($db, $q);
}



?>