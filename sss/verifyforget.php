<?php

session_start();
if(isset($_SESSION['opt']) && isset($_POST['verify']) && isset($_SESSION['id'])) {
    if($_SESSION['opt'] ==$_POST['verify'] ) {

        header("location:updatePassword.php");
        exit;
    } else{
        header("location:tryagain1.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Verify</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/roboto-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v5">
<div class="page-content">
    <div class="form-v5-content">
        <form class="form-detail" action="#" method="post">
            <h2>Verify</h2>
            <div class="form-row">
                <label for="code">code</label>
                <input type="text" name="code" id="code" class="input-text" placeholder="Verify Code" required>
                <i class="fas fa-user"></i>
            </div>

            <div class="form-row-last">
                <input type="submit" name="verify" class="register" value="Verify">
            </div>
            <a href="forget.php" class="text-primary"><small>send again</small><a>
        </form>
    </div>
</div>
</body>
</html>