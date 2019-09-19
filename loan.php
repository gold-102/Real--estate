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


   <!--header section-->
   <?php 
    if(!isset($_SESSION['username'])) {

    ?>
    <section class="header bg-danger" id="header">
   <div class="container ">
       <div class="row ">
           
            <div class="col-md-5 col-5 my-auto">
                    <ul class="list-unstyled my-auto">
                        
                        <li ><a href="index.php">Buy</a>
                         <li>
                        <li><a href="rent.php">Rent</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li ><a href="loan.php"  id="active">Home Loans</a></li>
                        
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
                        <li><a href="rent.php">Rent</a></li>
                        <li><a href="sell.php">Sell</a></li>
                        <li ><a href="loan.php" id="active">Home Loans</a></li>
                        
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



























































   <!--main section-->
   <section class="main py-5 " id="main">
       <div class="container">
           <h1 class="text-center text-uppercase text-dark display-4">home loans</h1>
           <div class="mx-auto bg-danger loan-underline"></div>


           
        <div class="row my-5 ">

            <div class=" col-md-7  bg-loan py-5">
                <h1 class="text-center text-uppercase" style="font-family: serif;">introducing home loans</h1>

                <p class="lead text-justify py-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque reiciendis doloremque voluptatem aperiam dolor fugit a facere iusto temporibus ullam adipisci, deserunt, ea nulla iure, id veniam quibusdam exercitationem ratione. Dolorum excepturi aperiam pariatur, consectetur ducimus est? Vel, hic! Ab odit amet autem a eaque cum natus veniam fugiat. Impedit.
                </p>
                <a href="#" class="btn btn-primary text-capitalize">read more...</a>
            </div>

            <div class="col-md-1">

            </div>






            <div class="col-md-4  bg-loan py-5">
                    <h1 class="text-center text-uppercase" style="font-family: serif;">get expert tips & advice</h1>
    
                    <p class="lead text-justify ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque reiciendis doloremque voluptatem aperiam dolor fugit a facere iusto temporibus ullam adipisci, deserunt, ea nulla iure, id veniam quibusdam exercitationem ratione. Dolorum excepturi aperiam pariatur, consectetur ducimus est? Vel, hic! Ab odit amet autem a eaque cum natus veniam fugiat. Impedit.
                    </p>
                    <a href="#" class="btn btn-primary text-capitalize">read more...</a>
                </div>







            
        </div>
       </div>
   </section>
   <!--end of main-->



























     <!--footer-->
     <section class="footer" id="footer-loan">
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