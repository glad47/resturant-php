<?php
include "connect.php";
session_start();
if(isset($_POST['register'])) {
    $name=$_POST['name'];;
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $ratedIndex=-1;
    $review="";
    $name=mysqli_real_escape_string($conn,$name);
    $password=mysqli_real_escape_string($conn,$password);
    $email=mysqli_real_escape_string($conn,$email);
    $mobile=mysqli_real_escape_string($conn,$mobile);
    $q="select * from customer where  email='$email'";
    $res=mysqli_query($conn,$q);
    $count=mysqli_num_rows($res);
    if($count >= 1){
        header("location:tryagain.php");

    }else {
        $vkey = md5(time() . $name);
        $password = md5($password);
        $to = $email;
        $subject = "Email Verification";
        $message = "<a href='http://localhost/bootstrap/sss/verify.php?vkey=$vkey'>confirm sign up</a>";
        $headers = "From:zizoo4949@yahoo.com" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
        if (mail($to, $subject, $message, $headers)) {
            $q = "insert into customer(name,email,password,mobile,ratedIndex,review,vkey,verified) VALUES 
('$name','$email','$password','$mobile','$ratedIndex','$review','$vkey','0') ";
            mysqli_query($conn, $q);
            header("location:sentverification.php");
            exit;
        } else {
            header("location:signup.php?error=1");
        }
    }


}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Ootadamane</title>
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
				<h2>Register Account</h2>
				<div class="form-row">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text" placeholder="Your Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
                <div class="form-row">
                    <label for="mobile">Mobile No</label>
                    <input type="text" name="mobile" id="mobile" class="input-text" placeholder="Your Mobile No" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="row justify-content-start">
                    <div class="col">
                        <a id="lin" href="terms.php"><small>By Register You Understand & Accept Our Terms & Conditions</small></a>
                    </div>
                </div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body>
</html>