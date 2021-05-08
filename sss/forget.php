<?php
include "connect.php";
if(isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, strtolower(trim($_REQUEST['email'])));


    $query = "SELECT * FROM customer WHERE email='$email ' LIMIT 1";
    $response = mysqli_query($conn, $query);
    echo mysqli_num_rows($response);
    if (mysqli_num_rows($response) == 1) {

        $to = $_REQUEST['email'];
        $to = mysqli_real_escape_string($conn, $to);

        $q = "select * from customer where email='$to' LIMIT 1";
        $res = mysqli_query($conn, $q);
        $count = mysqli_num_rows($res);
        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);
            $id = $row['id'];
            $q = "update customer set verified='0' where id='$id'";
            mysqli_query($conn, $q);
            $subject = "Email Verification";
            $message = "<a href='http://localhost/bootstrap/sss/updatePassword.php?id=$id'>reset password</a>";
            $headers = "From:zizoo4949@yahoo.com" . "\r\n";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
            if (mail($to, $subject, $message, $headers)) {
                header("location:thankyou2.php");
            } else {
                header("location:tryagain1.php");
            }
        }
    }else{
        header("location:tryagain2.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Password</title>
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
            <h2>Forget Password</h2>

            <div class="form-row">
                <label for="Email">Please Enter Email:</label>
                <input type="text" name="email" id="email" class="input-text" placeholder="Your Email" required>
                <i class="fas fa-lock"></i>
            </div>

            <div class="form-row-last">
                <input type="submit" name="login" class="register" value="Change Password">
            </div>
        </form>








    </div>
</body>
</html>