<?php

require_once ("db.php");


$d = $_REQUEST['d'];
    $del = mysqli_query($db, "DELETE FROM buy_house WHERE id = '$d'");
    if($del) {
        echo "<script>alert('Record deleted successfully');</script>";
        header("Location: admin_buy.php");
    }
    

    ?>