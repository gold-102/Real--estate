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
<body class="bg-dark">


    <!--header section-->
    <?php 
    if(!isset($_SESSION['username'])) {

    ?>
    <section class="header bg-danger" id="header">
   <div class="container ">
       <div class="row ">
           
            <div class="col-md-5 col-5 my-auto">
                    <ul class="list-unstyled my-auto">
                        
                        <li ><a href="index.php" >Buy</a>
                         <li>
                        <li><a href="rent.php">Rent</a></li>
                        <li><a href="sell.php" id="active">Sell</a></li>
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
                        <li><a href="rent.php" >Rent</a></li>
                        <li><a href="sell.php" id="active" >Sell</a></li>
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
   <section class="bg-sell py-5">
        <div class="container-fluid ">
           
            <h1 class="text-center text-uppercase text-white display-4 my-5">explore your home's value</h1>
    
            <div class="row my-4">
                <div class="mx-auto form-row">
                <form action="#" >
                    
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter your address">
                        
                    
                    
                        <i class="fas fa-search search-icon text-muted mr-2"></i>
                
                </form>
            </div>
            </div>
            <h1 class="text-center text-muted text-capitalize display-4 my-5">selling is complicated. real estate is changing that.</h1>
        
        </div>
    </section>
    
        <!--end of mid section-->











































        <!--selling section-->
        <section class="sell py-5 bg-dark" id="sell">
            <div class="container">
                <div class="col-12  mx-auto">
                    <h1 class="text-center text-white text-capitalize">selling advice</h1>
                    <p class="sell-underline mx-auto bg-warning"></p>
                    <p class="lead text-muted text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores tenetur hic excepturi veniam quas odio, neque fuga perspiciatis necessitatibus molestias blanditiis repellendus odit soluta accusamus eos nesciunt maiores repudiandae aut suscipit, velit dicta quaerat facere. Quia culpa aspernatur minima minus veniam rerum. Dolor dignissimos quos, non omnis temporibus voluptas. Temporibus id, optio ut porro, vitae pariatur earum saepe rerum, similique vero quidem. Id praesentium veniam ratione laborum inventore quia dolores culpa nulla consequatur ipsam qui repellat neque enim eos nobis, vitae cum cumque. Commodi, quaerat similique aut, vitae, praesentium blanditiis eveniet pariatur amet aliquam sint voluptatum nostrum nam aliquid inventore incidunt ad deserunt maxime soluta? Saepe labore doloremque quod quisquam amet ullam deserunt, rerum aperiam dolorem hic a veritatis adipisci nesciunt officiis sed tempore quos cupiditate nemo obcaecati porro ad officia dolores? Vel, delectus doloribus officia vero provident modi atque esse nulla nobis minus amet deleniti distinctio fugiat porro assumenda.</p>
                </div>
            </div>
        </section>
        <!--end of section-->































     <!--footer-->
     <section class="footer" id="footer-sell">
            <div class="container">
                <p class="text-center text-white text-uppercase" style="line-height: 2.5">&copy; real estate</p>
            </div>
        </section>
        <!--end of footer-->
    
    
    
    
    
    
    
        <!--javascript files-->
        <script src="js/app.js"></script>
        <script src="js/jquery.min.js"></script>
        
    </body>
    </html>