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
<body style="background: url('../images/contactbg.jpg')center/cover no-repeat fixed !important;">


    <!--header section-->
    <section class="header bg-danger" id="header">
        <div class="container ">
            <div class="row ">
                
                 <div class="col-md-5 col-5 my-auto">
                         <ul class="list-unstyled my-auto">
                             
                             <li ><a href="index.php" >Buy</a>
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
                                     <li ><a href="contact.php" id="active">Contact us</a></li>
                                     
                                 </ul>
                     </div>
                     
            </div>
            
     
        </div>
     </section>
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


































   <!--contact section-->

   <section class="contact py-5" id="contact">
       <div class="container">
           <h3 class="text-center display-4 text-capitalize text-success">contact us</h3>
        <div class="col-md-8 col-12 mx-auto">

        <form action="submit_data.php" method="post" onsubmit="return formSubmit()">
            <p id="error" class="text-uppercase font-weight-bold text-center text-danger"></p>
            <div class="form-group">
                <input type="text" id="your_name" name="name" class="form-control" placeholder="Enter Name..." autocomplete="off">
            </div>

            <div class="form-group">
                <input type="text" id="mobile_no" name="mobile" class="form-control" placeholder="Enter Mobile Number..." autocomplete="off">
            </div>


            <div class="form-group">
                <input type="text" class="form-control" id="email_id" name="email" placeholder="Enter Email..." autocomplete="off">
            </div>

            <div class="form-group">
                <textarea class="form-control" id="message" cols="30" rows="5" placeholder="Drop Your Message..." name="message" autocomplete="off"></textarea>
            </div>

            <div align="right">
            <input type="submit" class="btn btn-success btn-lg" name="submit" value="Send Message">
        </div>


        </form>

    </div>



       </div>
   </section>

   <!--end of contact section-->








    <!--footer-->
    <section class="footer" id="footer-contact">
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