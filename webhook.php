<?php
include "connect.php";

/*
Basic PHP script to handle Instamojo RAP webhook.
*/

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
    ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
    uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data), "3042310007544253912955a3d983f855");
if($mac_provided == $mac_calculated){
    if($data['status'] == "Credit"){
        $price=$data['amount'];
        $q="select * from package where price='$price'";
        $res=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($res);
        $pid=$row['id'];
        $name=$data['buyer_name'];
        $email=$data['email'];
        $q="select * from customer where name='$name' and email='$email'";
        $res=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($res);
        $uid=$row['id'];
        $date=date("Y/m/d");
        $q="insert into cus_pac(cus_id,pac_id,date_pay) values ('$uid','$pid',$date)";
        $res=mysqli_query($conn,$q);


    }
    else{


    }
}
else{
    echo "MAC mismatch";
}

?>