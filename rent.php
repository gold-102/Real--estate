<?php
    require_once ('db.php');
  
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


<?php 
    if(!isset($_SESSION['username'])) {

    ?>
    <!--header section-->
    <section class="header bg-danger" id="header">
      <div class="container ">
          <div class="row ">
              
               <div class="col-md-5 col-5 my-auto">
                       <ul class="list-unstyled my-auto">
                           
                           <li ><a href="index.php" >Buy</a>
                            <li>
                           <li><a href="rent.php" id="active">Rent</a></li>
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
                        
                        <li ><a href="index.php" >Buy</a>
                         <li>
                        <li><a href="rent.php" id="active">Rent</a></li>
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









































































   <!--login section using javascript-->


   <div class="container">
      <div class="row">

     <div class="col-md-4 col-12 mx-auto">


<div class="form-modal mx-auto" id="login-container">
  <div class="modal-content-login">
  <div class="modal-close">
      <i class="fas fa-window-close"></i>
  </div>







<div class="mx-auto mt-2 py-2 " >
  <h3 class="text-center text-capitalize text-primary pb-3" style="font-family: serif;">login here</h3>
      <form action="check_login.php" method="post" onsubmit="return loginForm()">
          <p id="msg" class="text-danger text-center"></p>
              <div class="form-group">
                  
                  <input type="text" name="username" class="form-control" id="username" autocomplete="off" placeholder="Enter Email/Mobile...">
              </div>
  
               <div class="form-group">
                  
                  <input type="password" name="password" class="form-control" id="password" autocomplete="off" placeholder="Password...">
              </div>
              <div align="center">
              <input type="submit" name="login" id="login" value="Login" class="btn btn-outline-primary btn-block">
              <br>
              <br>
              
          </div>
          </form>
  
</div>



</div>







</div>
</div>
</div>

</div>

<!--end of login section-->

































































<!--signup form section using javacript-->
<div class="container">
  <div class="row">
      <div class="col-md-4 col-12 mx-auto">


<div class="form-modal_signup mx-auto" id="signup-container">
   
   <div class="modal-close-signup">
       <i class="fas fa-window-close"></i>
   </div>







<div class=" mx-auto mt-2 py-2 " >
   <h3 class="text-center text-capitalize text-success pb-3" style="font-family: serif;">signup now</h3>
       <form action="user_data.php" method="post" onsubmit="return signupForm()">
              <p id="msg-1" class="text-danger text-center"></p>
               <div class="form-group">
                   
                   <input type="text" name="email" class="form-control" id="email" autocomplete="off" placeholder="Enter Email...">
               </div>



               <div class="form-group">
                   
                      <input type="text" name="mobile" class="form-control" id="mobile" autocomplete="off" placeholder="Enter Mobile Number...">
                  </div>
   
                <div class="form-group">
                   
                   <input type="password" name="password" class="form-control" id="passwords"    value="" autocomplete="off" placeholder="Password...">
               </div>


               <div class="form-group">
                   
                      <input type="password" name="confirm_password" class="form-control" id="confirm-password" value="" autocomplete="off" placeholder="Re-Enter Password...">
                  </div>



               <div align="center">
               <input type="submit" name="signup" id="signup" value="Signup" class="btn btn-outline-success btn-block">
           </div>
           </form>
   
</div>



</div>







</div>
</div>
</div>

<!--end of signup form section using javacript-->






































    <!--mid search section-->
    <section class="bg py-5">
            <div class="container-fluid ">
               
                <h1 class="text-center text-uppercase text-danger display-4 my-5">find your perfect rental</h1>
        
                <div class="row my-4">
                    <div class="mx-auto form-row">
                    <form action="#" >
                        
                            <input type="text" class="form-control" name="search" id="search" placeholder="Enter an address, neighbourhood, city, or zip">
                            
                        
                        
                            <i class="fas fa-search search-icon text-muted mr-2"></i>
                    
                    </form>
                </div>
                </div>
                <h1 class="text-center text-danger display-4 my-5">We’ll help you find a place you’ll love.</h1>
            
            </div>
        </section>
        
            <!--end of mid section-->




































            <!--sale section-->
   <section class="sale py-5" id="sale">
        <div class="container-fluid">
            <h1 class="text-center mt-5 text-capitalize" id="heading-1">expensive new rentals</h1>
            <div class="text-center mx-auto title-underline"></div>
             <h3 class="text-center py-5"><a href="#">View All</a></h3>
 
 
 
            <div class="row my-5">

            <?php

            $q="SELECT * FROM rent_house WHERE category = 'expensive' ORDER BY id DESC LIMIT 4";

            $query = mysqli_query($db, $q);
            $num = mysqli_num_rows($query);
            if($num > 0) {

            while($rent = mysqli_fetch_array($query)) {

            



            ?>



                <div class="col-md-3 col-12" id="padding-card">
                    <div class="card mx-auto" >
                            <img src="admin/img/<?php echo $rent['image']; ?>" height="200px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">House for Rent</h5>
                              <p class="card-text">$<?php echo $rent['price'] ?><br><?php echo 
                              $rent['detail'] ?></p>

                              <?php 
                              if(!isset($_SESSION['username']))
                              {
                               
                              ?>
                            <a href="#" class="btn btn-primary">view</a>
                            <?php 

                            }
                            else {

                                    ?>
                              <a href="show-1.php?ref=<?php echo $rent['id']; ?>" class="btn btn-primary">view</a>
                              <?php
                            }
                            ?>
                            </div>
                          </div>
               </div>

                <?php
            }
          }


                ?>
                

                         

            </div>
 
            
            
        </div>
    </section>
    <!--end of sale section-->
 






























      <!--sale section-->
   <section class="sale pb-5" id="sale">
        <div class="container-fluid">
            <h1 class="text-center mt-5 text-capitalize" id="heading-1" >cheap new rentals</h1>
            <div class="text-center mx-auto title-underline"></div>
             <h3 class="text-center py-5"><a href="#">View All</a></h3>
 
 
 
            <div class="row my-5">
            <?php

            $q="SELECT * FROM rent_house WHERE category = 'cheap' ORDER BY id DESC LIMIT 4";

            $query = mysqli_query($db, $q);
            $num = mysqli_num_rows($query);
            if($num > 0) {

            while($rent = mysqli_fetch_array($query)) {

            



            ?>


              <div class="col-md-3 col-12" id="padding-card">
                    <div class="card mx-auto" >
                            <img src="admin/img/<?php echo $rent['image']; ?>" height="200px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">House for Rent</h5>
                              <p class="card-text">$<?php echo $rent['price'] ?><br><?php echo 
                              $rent['detail'] ?></p>
                              <?php 
                              if(!isset($_SESSION['username']))
                              {
                               
                              ?>
                            <a href="#" class="btn btn-primary">view</a>
                            <?php 

                            }
                            else {

                                    ?>
                              <a href="show-1.php?ref=<?php echo $rent['id']; ?>" class="btn btn-primary">view</a>
                              <?php
                            }
                            ?>
                            </div>
                          </div>
               </div>
                
                <?php
            }
          }


                ?>

                         

            </div>
 
            
            
        </div>
    </section>
    <!--end of sale section-->
 

































































     <!--popular section-->
   <section class="popular pb-5" id="popular">
        <div class="container-fluid">
            <h1 class="text-center text-uppercase text-dark mt-5" id="heading-1">popular rentals</h1>
             <div class="text-center mx-auto title-underline"></div>
 
            <div class="row my-5">

            <?php

$q="SELECT * FROM rent_house WHERE category = 'popular' ORDER BY id DESC LIMIT 4";

$query = mysqli_query($db, $q);
$num = mysqli_num_rows($query);
if($num > 0) {

while($rent = mysqli_fetch_array($query)) {





?>
                <div class="col-md-3 col-12" id="padding-card">
                    <div class="card mx-auto" >
                            <img src="admin/img/<?php echo $rent['image']; ?>" height="200px" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">House for Rent</h5>
                              <p class="card-text">$<?php echo $rent['price'] ?><br><?php echo 
                              $rent['detail'] ?></p>
                              <?php 
                              if(!isset($_SESSION['username']))
                              {
                               
                              ?>
                            <a href="#" class="btn btn-primary">view</a>
                            <?php 

                            }
                            else {

                                    ?>
                              <a href="show-1.php?ref=<?php echo $rent['id']; ?>" class="btn btn-primary">view</a>
                              <?php
                            }
                            ?>
                            </div>
                          </div>
               </div>
                <?php
          }
      }



?>
            </div>
 
 
 
 
            
            
        </div>
    </section>
    <!--end of popular section-->



   <!--footer-->
   <section class="footer" id="footer">
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