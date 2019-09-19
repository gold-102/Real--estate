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
<li class="mr-3" style="display:inline-block;"><a href="view.php">View Booking</a></li>
<li class="mr-3" style="display:inline-block;"><a href="admin_buy.php">buy</a></li>
<li class="mr-3" style="display:inline-block;"><a href="admin_rent.php">rent</a></li>
<li style="display:inline-block;"><a href="logout.php">logout</a></li>
</ul>
</div>

<div class="container my-5 bg-light">
    <h1 class="text-center text-uppercase py-3">upload your blog posts</h1>
    <div class="row py-5">


    <div class="col-8 mx-auto">
    <form action="send_data.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    <input type="text" name="title" placeholder="enter title" class="form-control">
    </div>



    <div class="form-group">
    <textarea name="desc_blog" class="form-control"></textarea>
    </div>



    <div class="form-group">
    <input type="file" name="image" >
    </div>

    <button class="btn btn-primary" name="submit">
    submit</button>
    
    
    </form>
    
    </div>



</div>
</div>



























<div class="container py-5">
<div class="row">

<div class="col-8 mx-auto">

<div class="table-responsive">
    <table class="table">

    <thead class="text-uppercase">
    <th>#</th>
    <th>title</th>
    <th>image</th>
    <th>operations</th>
    </thead>



    <tbody>
    <?php 
    $q = mysqli_query($db, "SELECT * FROM blog ORDER BY id DESC");
    $n = mysqli_num_rows($q);
    if($n>0) {
        while($r = mysqli_fetch_array($q)) {

    



    ?>
    <tr>
    <td><?php echo $r['id']; ?></td>
    <td><?php echo $r['title']; ?></td>
    <td><img src="img/<?php echo $r['image']; ?>" alt="" style="width:7rem;height:5rem;"></td>
    <td class="text-center">
    <a href="delete_blog.php?d=<?php echo $r['id'] ?>"><i class="fa fa-trash" aria-hidden="true" style="font-size:2rem;">
    </i></a></td>

    </tr>
    <?php
        }
    }
  
    ?>
    
    </tbody>




    </table>

    </div>





</div>

</div>

</div>




</body>
</html>