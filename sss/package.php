<?php include "connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>About OotadaMane</title>
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
<body class="justify-content-center align-content-center m-5">
<div class="container text-center bg-white p-5 ">
    <h1 class="mt-5">My Package</h1>
    <table class="table">
        <thead>
        <tr>

            <th scope="col">#</th>
            <th scope="col">Package</th>
            <th scope="col">Date of Subscription</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $uid=$_REQUEST['uid'];
        $q="select cus_pac.pac_id as pid,cus_pac.cus_id as uid,cus_pac.date_pay as date_pay,package.name as name from cus_pac left JOIN package on pac_id=package.id where cus_id='$uid' ";
        $res=mysqli_query($conn,$q);
        $i=1;
        while($row=mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <th scope="row"><?php echo $i++; ?></th>
            <td scope="row"><?php echo $row['name'] ?></td>
            <td scope="row"><?php echo $row['date_pay'] ?></td>
        </tr>
<?php } ?>

        </tbody>
    </table>



</div>
</body>
</html>