<?php
include "connect.php";
include "validation.php";

$q="select * from customer";
$res=mysqli_query($conn,$q);
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
        <span class="">Ootadamanehm</span>
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
            <h2>Dashboard<small> - Good morning .</small></h2>

            <!-- /.alert -->


            <!-- Content Edit Table -->
            <div class="card mt-3">
                <div class="card-body">
                    <h4>Customer</h4>
                    <table class="table table-responsive d-md-table">
                        <thead>

                        <tr>
                            <th scope="col" >#</th>
                            <th scope="col" >id</th>
                            <th scope="col" >Name</th>
                            <th scope="col" >Phone</th>
                            <th scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=1;
                        while($row=mysqli_fetch_assoc($res)){
                        ?>
                        <tr class="bg-faded">
                            <td scope="row"><?php echo $i++; ?></td>
                            <td scope="row"><?php echo $row['id']; ?></td>
                            <td scope="row"><?php echo $row['name']; ?></td>
                            <td scope="row"><?php echo $row['mobile']; ?></td>

                            <td class="no-wrap">
                                <a href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil pr-1"></i>Edit</a> | <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to proceed?')"><i class="fa fa-trash pr-1"></i>Delete</a>
                            </td>
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>
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