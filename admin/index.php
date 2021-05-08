<?php
include "connect.php";
if(isset($_REQUEST['login'])){
 $name=$_REQUEST['name'];
    $password=$_REQUEST['password'];
    $name = mysqli_real_escape_string($conn,$name);
    $password = mysqli_real_escape_string($conn,$password);

    $q = "SELECT * FROM admin WHERE name='$name' and  password='$password'";
    $response = mysqli_query($conn,$q);

    if(mysqli_num_rows($response))
    {
        session_start();
        $row = mysqli_fetch_array($response);
        $_SESSION['username'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['start']=time();
        header("location:dashboard.php");
        exit;
    }
    else
    {
        header("location:index.php?error=1");
        exit;
    }
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

<!--
    ####################################################
    B O D Y
    ####################################################
    -->

<div class="container justify-content-center align-content-center mt-5 w-50"  >



<div class="card">
    <h2 class="text-center">Login</h2>
    <div class="card-body">
    <form class="text-center">
        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" name="name" class="form-control" id="name"  placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
       <div class="justify-content-center text-center">
            <button type="submit" name="login" class="btn btn-primary w-25" value="login">Login</button>
       </div>
    </form>
    </div>
</div>


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