<?php

    require_once ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/516dd3e17a.js"></script>
</head>
<body>

<div class="text-right mr-5 my-3 text-uppercase ">
<ul style="list-style-type:none;font-size:2rem;">
<li class="mr-3" style="display:inline-block;"><a href="upload.php">home</a></li>

<li class="mr-3" style="display:inline-block;"><a href="view.php">view buy homes</a></li>
<li class="mr-3" style="display:inline-block;"><a href="view_rent.php">view rental homes</a></li>

<li style="display:inline-block;"><a href="logout.php">logout</a></li>
</ul>
</div>

<div class="container my-5 bg-light">
    <h1 class="text-center text-uppercase py-3">bookings of rental homes</h1>
    <div class="row py-5">


    <div class="table-responsive">
    <table class="table">
   

    <thead class="text-uppercase">
    <th>#</th>
    <th>user email</th>
    <th>user mobile</th>
    <th>home image</th>
    <th>home type</th>
    
    
    </thead>
   


    <tbody>
    <tr>
    <?php 

$q = mysqli_query($db, "SELECT * FROM booking_two ORDER BY id DESC");
$n = mysqli_num_rows($q);
if($n>0) {
    while($row = mysqli_fetch_array($q)) {
        $p_id = $row['home_id'];
        $u_id = $row['user_id'];
        


    $q1 = mysqli_query($db, "SELECT * FROM rent_house WHERE id = '$p_id'");
    $num = mysqli_num_rows($q1);
    if($num == 1) {
        while($r = mysqli_fetch_assoc($q1)) {

    
    $q2 = mysqli_query($db, "SELECT * FROM user_data WHERE id = '$u_id'");
    $nm = mysqli_num_rows($q2);
    if($num ==  1) {
        while($rg = mysqli_fetch_assoc($q2)) {

     
            
     
 

?>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $rg['email']; ?></td>
    <td> <?php echo $rg['mobile']; ?></td>
    <td> <img src="img/<?php echo $r['image']; ?>" class="img-fluid" style="height:5rem;width:7rem;"></td>
    <td><?php echo $r['category']; ?></td>
    </tr>
    <?php
       }

    }
    }
    }
}
}
 
    ?>

    
    </tbody>
    
    </table>
    
    
    </div>



</div>
</div>



</body>
</html>