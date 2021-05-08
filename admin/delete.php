<?php
include "connect.php";
session_start();
$id=$_REQUEST['id'];
$q="delete from customer where id ='$id'";
mysqli_query($conn,$q);
header("location:".$_SERVER['HTTP_REFERER']);
exit();
?>