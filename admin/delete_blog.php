<?php

require_once ("db.php");


$d = $_REQUEST['d'];
    $del = mysqli_query($db, "DELETE FROM blog WHERE id = '$d'");
    if($del) {
        echo "<script>alert('Record deleted successfully');</script>";
        header("Location: upload.php");
    }
    

    ?>
    