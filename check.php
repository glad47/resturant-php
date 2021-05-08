<?php

session_start();
if(isset($_REQUEST['id'])) {
    if (isset($_SESSION['id']) && isset($_SESSION['password']) && isset($_SESSION['name'])) {
        $dest=$_REQUEST['id'];
        echo "unbelivable";
        $dest = b64link_decode($dest);
        header("location:$dest");
        exit;

    }else {
        header("location:sss/login.php");
        exit;
    }
}
function b64link_decode($string){
    $string = urldecode($string);
    $string = base64_decode($string);
    return $string ;
}


?>