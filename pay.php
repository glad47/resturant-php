<?php
include "connect.php";
include "instamojo.php";
session_start();
$uid=$_REQUEST['uid'];
$pid=$_REQUEST['pid'];
$q="select * from customer where id='$uid'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$q="select * from package where id='$pid'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);
$pname=$row['name'];
$price=$row['price'];

$api = new Instamojo\Instamojo("447328e2770bf3acec04aa454512a792", 'bcef75bd0869184c471baa02764ceca0', 'https://test.instamojo.com/api/1.1/');

try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $pname,
        "amount" => $price,
        "send_email" => true,
        "email" => $email,
        "buyer_name" => $name,
        "phone" => $mobile,
        "send_sms" => true,
        "webhook" => "dsabgfh.php",
        "redirect_url" => "localhost/bootstrap/thankyoupayment.php"

    ));
   // print_r($response);
    $pay_url=$response['longurl'];
    header("location:$pay_url");
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}


?>