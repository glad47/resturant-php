<?php
include "connect.php";
include "validation.php";

if(isset($_REQUEST['submit'])){
    $id=$_REQUEST['id'];
    $name=$_REQUEST['name'];
    $mobile=$_REQUEST['mobile'];
    $email=$_REQUEST['email'];
    $review=$_REQUEST['review'];
    $ratedIndex=$_REQUEST['ratedIndex'];
    $q3="update customer set name='name',mobile='$mobile',email='$email',review='$review',ratedIndex='$ratedIndex' where id='$id'";
    mysqli_query($conn,$q3);
    header("location:dashboard.php");


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicons - http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/log192.jpg">
    <link rel="icon" type="image/png" href="img/favicons/log32.jpg"
          sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/log16.jpg"
          sizes="16x16">

    <meta name="theme-color" content="#ffffff">
    <title>OotadaManehm Admin</title>
    <!--
####################################################
C S S - bootstrap, custom styles
####################################################
-->
    <script src="https://kit.fontawesome.com/9ebadcd66e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Lato Display Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/admin.css" rel="stylesheet">
</head>
<body class="admin">
<!--
####################################################
N A V B A R
####################################################
-->

<!-- If you need sticky-top to work in lower versions of IE https://github.
com/filamentgroup/fixed-sticky -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top ">
    <div class="navbar-toggler-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <!-- Important - make sure to have the toggler button outside of the container -->
    <a class="navbar-brand" href="#">
        <img src="img/favicons/log16.jpg" width="25" height="25" class="d-inline-block align-top" alt="">
        <span class="">OotadaManehm </span>
    </a>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav justify-content-end w-100">
            <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">Visit Site
                    <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item dropdown user">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                   id="responsiveNavbarDropdown" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <img src="img/favicons/log16.jpg"
                         alt="" class="rounded-circle"> Hi OotadaManehm</a>
                <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                    <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--
    ####################################################
    B O D Y
    ####################################################
    -->

<div class="container-fluid">
    <div class="row">
        <!--
        ####################################################
        S I D E B A R
        ####################################################
        -->
        <div class="col-lg-2 sidebar">

            <!-- /.sidebar -->
            <!-- sidebar navigation -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <i class="fa fa-tachometer-alt" aria-hidden="true"></i> Dashboard</a>
                </li>

            </ul>
        </div>
        <!-- /.nav -->
        <!--
        ####################################################
        M A I N C O N T E N T
        ####################################################
        -->
        <div class="col main">
            <h2>Edit Customer<small> - Good morning </small></h2>

            <!-- /.alert -->


            <!-- Content Edit Table -->
            <div class="card mt-3">
                <div class="card-body">
                    <form>
                        <?php
                        $id=$_REQUEST['id'];
                        $q="select * from customer where id='$id'";
                        $res=mysqli_query($conn,$q);
                        $row=mysqli_fetch_assoc($res)
                        ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" required>

                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" value="<?php echo $row['email']; ?>"  required>

                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" value="<?php echo $row['mobile']; ?>"  required>

                        </div>

                        <div class="form-group">
                            <label for="ratedIndex">Rating</label>
                            <input type="text" class="form-control" id="ratedIndex"  value="<?php echo $row['ratedIndex']; ?>"  required>

                        </div>

                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea type="text" class="form-control" id="review" value="<?php echo $row['review']; ?>" required></textarea>

                        </div>
                        <div class="form-group">

                            <input type="hidden" class="form-control" id="ratedIndex"  value="<?php echo $id; ?>"  required>

                        </div>


                        <table class="table mt-5">

                            <thead>
                            <tr>
                                <th scope="col">Package </th>
                                <th scope="col">Package name</th>
                                <th scope="col">Date of Subscription</th>
                                <th scope="col">price</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                        $i=1;
                        $q2="select cus_pac.pac_id as pid,cus_pac.cus_id as uid,cus_pac.date_pay as date_pay,package.name as name, package.price as price from cus_pac left JOIN package on pac_id=package.id where cus_id='$id' ";
                        $res2=mysqli_query($conn,$q2);
                        while($row2=mysqli_fetch_assoc($res2)){
                          ?>

                            <tr class="mb-2">
                                <th scope="row"><?php echo $i++; ?></th>
                                <td scope="row"><?php echo $row2['name'] ?></td>
                                <td scope="row"><?php echo $row2['date_pay'] ?></td>
                                <td scope="row"><?php echo $row2['price'] ?></td>
                            </tr>
                        <?php } ?>

                        <button type="submit" class="btn btn-primary" value="submit" name="submit">Update</button>
                    </form>
                </div>
            </div>
            <!-- /.card -->

            <!--
####################################################
F O O T E R
####################################################
-->
            <footer class="footer py-3">
                <div class="container-fluid">
                    <a href="#">© OotadaManehm</a>
                </div>
            </footer>

        </div>
        <!-- /.main -->
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->


<!--
####################################################
J A V A S C R I P T - jquery, bootstrap, plugins
Placed at the end of the document so the pages load faster
####################################################
-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<!-- local fallback in case the CDN is down -->
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.slim.min.js"><\/script>')
</script>
<!-- Bootstrap core JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Custom Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js" crossorigin="anonymous"></script>
<script src="js/admin.js"></script>
</body>
</html>