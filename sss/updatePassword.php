<?php
include "connect.php";
if(isset($_POST['login'])) {
    $id = $_REQUEST['id'];

    $password = $_REQUEST['password'];
    $password = mysqli_real_escape_string($conn, $password);
    $password = md5($password);
    echo $password;
    $q = "update customer set password='$password', verified='1' where id='$id'";
    $res = mysqli_query($conn, $q);
    if ($res) {
        header("location:updateSuccessfully.php");
        exit;
    } else {
        header("location:tryagain3.php");
        exit;
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
            <h2>Update Password</h2>
            <?php $id=$_REQUEST['id']; ?>
            <div class="form-row">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input-text" placeholder="Your new Password" required>
                <i class="fas fa-lock"></i>
            </div>
            <input type="hidden" name="id"   value="<?php echo $id; ?> "size="35"/>
            <div class="form-row-last">

                <input type="submit" name="login" class="register" value="Reset Password">
            </div>
        </form>








    </div>
</body>
</html>