<?php
    error_reporting(0);
    $ref=$_REQUEST['ref'];
    require_once ('db.php');

    



    $query = mysqli_query($db, "SELECT * FROM user_data WHERE email = '".$_SESSION['username']."' OR mobile = '".$_SESSION['username']."'");

    $num = mysqli_num_rows($query);
    if($num>0) {
        while($u=mysqli_fetch_assoc($query)) {
            $user_id = $u['id'];
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Real Estate</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.js"></script>
</head>
<body class="bg-light">


    <!--header section-->
    <?php 
    if(!isset($_SESSION['username'])) {

    ?>
    <section class="header bg-danger" id="header">
   <div class="container ">
       <div class="row ">
           
            <div class="col-md-5 col-5 my-auto">
                    <ul class="list-unstyled my-auto">
                        
                        <li ><a href="index.php" id="active">Buy</a>
                         <li>
                        <li><a href="rent.php">Rent</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li ><a href="loan.php">Home Loans</a></li>
                        
                    </ul>
                </div>
         
         
                <div class="col-md-2 col-2 py-2">
                     <a href="index.php"><img src="images/logo.jpg" alt="logo" class="logo-img" ></a>
                </div>
         
                <div class="col-md-5 col-5  my-auto">
                        <ul class="list-unstyled my-auto">
                        
                                
                                <li ><a href="blog.php">Blog</a></li>
                                <li ><a href="" id="login-btn">Login</a></li>
                                <li ><a href="" id="signup-btn">Sign up</a></li>
                                <li ><a href="contact.php">Contact us</a></li>
                                
                            </ul>
                </div>
                
       </div>
       

   </div>
</section>
<?php
}
else {


?>
<section class="header bg-danger" id="header">
   <div class="container ">
       <div class="row ">
           
            <div class="col-md-5 col-5 my-auto">
                    <ul class="list-unstyled my-auto">
                        
                        <li ><a href="index.php" id="active">Buy</a>
                         <li>
                        <li><a href="rent.php">Rent</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li ><a href="loan.php">Home Loans</a></li>
                        
                    </ul>
                </div>
         
         
                <div class="col-md-2 col-2 py-2">
                     <a href="index.php"><img src="images/logo.jpg" alt="logo" class="logo-img" ></a>
                </div>
         
                <div class="col-md-5 col-5  my-auto">
                        <ul class="list-unstyled my-auto">
                        
                                
                                <li ><a href="blog.php">Blog</a></li>
                                <li ><a>Hi, <?php echo $_SESSION['username']; ?></a></li>
                                <li ><a href="logout.php">Logout</a></li>
                                <!--<li ><a href="contact.php">Contact us</a></li>-->
                                
                            </ul>
                </div>
                
       </div>
       

   </div>
</section>
<?php 
}
?>
   <!--end of header section-->








































    <div class="container py-5">
    <div class="row">


 

    <div class="col-8 mx-auto">
    
    <h2 class="text-justify text-center font-weight-bold text-uppercase text-dark my-3">house for sale</h2>

    <?php

    $e = "SELECT * FROM buy_house WHERE id = '$ref'";

$qu = mysqli_query($db, $e);
$n = mysqli_num_rows($qu);

if($n > 0)  {

    while($b = mysqli_fetch_assoc($qu)) {


        $home_id = $b['id'];


?>


    <div class="d-flex justify-content-center my-5">

    <h4 class="text-justify text-muted mt-3 mr-2">$<?php echo $b['price']; ?>,<br> 
    <?php echo $b['details']; ?> </h4>

    <img src="admin/img/<?php echo $b['image']; ?>" alt="store" class="img-fluid ml-2">
    
    </div>
    <?php
        }
    }
    ?>





    <form action="insert.php?get_id=<?php echo $home_id; ?>" method="post">

    <h3 class="text-left text-capitalize font-weight-bold">wanna book your home</h3>
        
        <div class="form-group d-flex">
        <div class="col-6">
        <input type="radio" name="booking" value="YES" required>
        <span class="font-weight-bold" style="font-size:1.5rem;">YES</span>
        </div>



        <div class="col-6">

        <input type="radio" name="booking" value="NO" required>
        <span class="font-weight-bold" style="font-size:1.5rem;">NO</span>
        </div>

        
        </div>


        <input class="btn btn-success btn-lg" type="submit" name="submit" value="BOOK" />

    </form>
    
    
    </div>


    
    
    
    </div>
    
    </div>



    





<?php

//   if(isset($_POST['submit'])) {

//     $booking = $_REQUEST['booking'];
//     $qy = "INSERT INTO booking_one (home_id, booking, user_id) VALUES ('$home_id', '$booking', '$user_id')";
//     mysqli_query($db, $qy);
    
//     header("Location: index.php");
// }
?>




















 <!--footer-->
 <section class="footer" id="footer-blog" style="background-color: #f2b450;height: 40px;
            overflow: hidden;margin-top: 8rem !important;">
            <div class="container">
                <p class="text-center text-white text-uppercase" style="line-height: 2.5">&copy; real estate</p>
            </div>
        </section>
        <!--end of footer-->
    
    
    
        <!--javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/app.js"></script>
    </body>
    </html>