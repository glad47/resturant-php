<?php
include "connect.php";
if(isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn,strtolower(trim($_REQUEST['email'])));
    $password = mysqli_real_escape_string($conn,strtolower(trim($_REQUEST['password'])));
    $password=md5($password);

    $query = "SELECT * FROM customer WHERE email='$email' AND password='$password' and verified='1' LIMIT 1";

    $response = mysqli_query($conn,$query);

    if(mysqli_num_rows($response) > 0)
    {
        session_start();
        $row = mysqli_fetch_array($response);
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id']=$row['id'];
        $id=$row['id'];
        $_SESSION['id']=$id;
        $_SESSION['ratedIndex']=$row['ratedIndex'];
        $_SESSION['review']=$row['review'];
        header("location:../index.php");
        $query = "SELECT * FROM `customer`where id !='$id' order by ratedIndex DESC";
        $response = mysqli_query($conn,$query);
        $c=2;
        if(mysqli_num_rows($response)< $c){
            $c=mysqli_num_rows($response);
        }

            $row=mysqli_fetch_array($response);
            $_SESSION['n0']=$row['name'];
            $_SESSION['d0']=$row['ratedIndex'];
            $_SESSION['r0']=$row['review'];
        $row=mysqli_fetch_array($response);
        $_SESSION['n1']=$row['name'];
        $_SESSION['d1']=$row['ratedIndex'];
        $_SESSION['r1']=$row['review'];



    }
    else
    {
        header("location:login.php?error=1");
   }
    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Ootadamane</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
<div class="page-content">
    <div class="form-v5-content">
        <form class="form-detail" action="#" method="post">
            <h2>LOGIN</h2>
            <div class="form-row">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
                <i class="fas fa-lock"></i>
            </div>
            <div class="row justify-content-start">
                <div class="col">
                    <a id="lin" href="signup.php"><small>Don't Have an Account?</small></a>
                </div>
                <div class="col">
                    <a id="lin" href="forget.php" class="float-right"><small>Forget Password?</small></a>
                </div>
            </div>
            <div class="form-row-last">

                    <input type="submit" name="login" class="register" value="Login">
                </div>
        </form>








</div>
</body>
</html>