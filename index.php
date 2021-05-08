<?php
include "connect.php";
session_start();
function b64link_encode($string){
    $string = base64_encode($string);
    $string = urlencode($string);
    return $string ;
}
if(isset($_REQUEST['update'])){
    $msg=$_REQUEST['review'];
    $ratedIndex=$_REQUEST['index'];
    $id=$_SESSION['id'];
    $_SESSION['review']=$msg;
    $_SESSION['ratedIndex']=$ratedIndex;
    $ratedIndex=$ratedIndex+1;
    $q="update customer set review='$msg',ratedIndex='$ratedIndex' where id='$id'";
    mysqli_query($conn,$q);

   exit();
}

//$_SESSION['review']="Abdulaziz Ahmed Hassan ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,
shrink-to-fit=no">

    <!-- The above 3 meta tags *must* come first in the head; any other head
    content must come *after* these tags -->
    <title>Ootadamane</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons - http://realfavicongenerator.net/ -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/log192.jpg">
    <link rel="icon" type="image/png" href="img/log32.jpg"
          sizes="32x32">
    <link rel="icon" type="image/png" href="img/log16.jpg"
          sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="mask-icon" href="img/favicons/safari-pinned-tab.svg"
          color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <!-- Open Graph and Schema if needed goes below this line - https://
    webcode.tools/open-graph-generator/business -->
    <!--
####################################################
 C S S - bootstrap, custom styles
####################################################
     -->
    <!-- Bootstrap core CSS -->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/-->
    <!--bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59f-->
    <!--fF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Main CSS -->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Lato Display Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/homepage.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--
####################################################
    N A V B A R
####################################################
 -->
<!-- If you need sticky-top to work in lower versions of IE https://github.
com/filamentgroup/fixed-sticky -->
<nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <!-- One of the primary actions on mobile is to call a business - This
    displays a phone button on mobile only -->
    <div class="navbar-toggler-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <a class="navbar-brand" href="#">
        <img src="img/loggg.png"
             class="d-inline-block align-top" alt="">

    </a>
    <div class="collapse navbar-collapse " id="navbar">
    <nav class="nav d-flex flex-column flex-md-row w-100 justify-content-end">
    <a class="flex-fill text-center text-light nav-link"
       href="sss/login.php">LOGIN/REGISTER</a>
    </nav>

        <nav class="nav d-flex flex-column flex-md-row w-100 justify-content-end">
            <a class="flex-fill text-center text-light nav-link"
               href="sss/about.php">About</a>
            <a class="flex-fill text-center text-light nav-link"
               href="sss/contactus.php">Countact Us</a>
            <?php if(!empty($_SESSION['name'])){
                $n=$_SESSION['name'];
                $id=$_SESSION['id'];
                echo "<li class=\"nav-item dropdown user \">
                <a class=\"nav-link dropdown-toggle text-white \" style=\"text-decoration:none;\" href=\"#\" role=\"button\"
                   id=\"responsiveNavbarDropdown\" data-toggle=\"dropdown\"
                   aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img src=\"\" alt=\"\" class=\"rounded-circle\"> Hi $n</a>
                <div class=\"dropdown-menu\" aria-labelledby=\"responsiveNavbarDropdown\">
                   <a class=\"dropdown-item\" href=\"sss/package.php\">My Package</a> 
                   <a class=\"dropdown-item\" href=\"sss/loginout.php\">Log Out</a>
                   <a class=\"dropdown-item\" href=\"sss/contactus.php\">Help</a>
                </div>
            </li>";

            }
            ?>



        </nav>
    </div>
</nav>
<!--
####################################################
C A R O U S E L
####################################################
-->
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel"
     data-interval="6000">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <a href="">
                <!--
                If you need more browser support use https://scottjehl.github.
                io/picturefill/
                If a picture looks blurry on a retina device you can add a
                high resolution like this
                <source srcset="img/blog-post-1000x600-2.jpg, blog-post-
                1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
                What image sizes should you use? This can help - https://
                codepen.io/JacobLett/pen/NjramL
                -->
                <picture>
                    <source srcset="img/f11.jpg" media="(min-width:1400px)">
                    <source srcset="img/f12.jpg" media="(min-width:768px)">
                    <source srcset="img/f13.jpg" media="(min-width:576px)">
                    <img srcset="img/f12.jpg" alt="responsive image" class="d-block img-fluid">
                </picture>
                <div class="carousel-caption">
                    <div>
                        <h2>Studying or Working</h2>
                        <p>It is not easy to cook when staying alone.</p>
                        <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="">
                <!--
                If you need more browser support use https://scottjehl.github.
                io/picturefill/
                If a picture looks blurry on a retina device you can add a
                high resolution like this
                <source srcset="img/blog-post-1000x600-2.jpg, blog-post-
                1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
                What image sizes should you use? This can help - https://
                codepen.io/JacobLett/pen/NjramL
                -->
                <picture>
                    <source srcset="img/d11.jpg" media="(min-width:1400px)">
                    <source srcset="img/d12.jpg" media="(min-width:768px)">
                    <source srcset="img/d13.jpg" media="(min-width:576px)">
                    <img srcset="img/d12.jpg" alt="responsive image" class="d-block img-fluid">
                </picture>
                <div class="carousel-caption justify-content-center alignitems-center">
                    <div>
                        <h2>Free Delivery on all packages</h2>

                        <p>Breakfast:7:30-10:30am.</p>
                        <p>Lunch:12:00-2:30pm.</p>
                        <p>Dinener:7:30-9:30pm.</p>
                        <span class="btn btn-sm btn-outline-primary">Our Process</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
        <div class="carousel-item">
            <a href="">
                <!--
                If you need more browser support use https://scottjehl.github.
                io/picturefill/
                If a picture looks blurry on a retina device you can add a
                high resolution like this
                <source srcset="img/blog-post-1000x600-2.jpg, blog-post-
                1000x600-2@2x.jpg 2x" media="(min-width: 768px)">
                What image sizes should you use? This can help - https://
                codepen.io/JacobLett/pen/NjramL
                -->
                <picture>
                    <source srcset="img/l11.jpg" media="(min-width:1400px)">
                    <source srcset="img/l12.jpg" media="(min-width:768px)">
                    <source srcset="img/l13.jpg" media="(min-width:576px)">
                    <img srcset="img/l12.jpg" alt="responsive image" class="d-block img-fluid">
                </picture>
                <div class="carousel-caption justify-content-center alignitems-center">
                    <div>
                        <h2>Get Relaxed</h2>
                        <p>%100 Home Made,Healthy Food Delivered.</p>
                        <span class="btn btn-sm btn-secondary">Learn How</span>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.carousel-item -->
    </div>
    <!-- /.carousel-inner -->
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- /.carousel -->


<section id="brand-message" class="py-3">
    <div class="container text-light text-center">
        GET Trial Request @ 150 Rs for 3 Times,Taste it and decide about Quality & Quantity
    </div>
    <!-- /.container -->
</section>

<!--
####################################################
C A S E S T U D Y 1
####################################################
-->


<section>

<div id="meal1" class="my-4">
    <div class="container-fluid px-3 mt-2 mx-2">
        <div class=" text-center align-content-start justify-content-center  mt-0">
            <div>
                <a id="intro" href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=1"); ?>" class="btn mb-1 py-2 px-3" style="font-size: 35px;">Taste it </a>
                <h5>Taste Breakfast,Lunch and Dinner same day</h5>
            </div>
        </div>
        <div class="row align-items-center mb-5">


            <div class="col col-md-3.5 align-items-start ">

                <h2 class="text-center">Mini Serve3 Package</h2>
                <div id="meal" class="card pb-3">
                    <img class="card-img-top" src="img/kabab800.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.950/-</h3>
                        <h4 class="card-text">3 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">10 days validity (Suggesting you to have 3 times in a day, If you take 1
                            time or 2 times or 3 times, it wissll be consider as one day)</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=2"); ?>" class="btn btn-primary">Subscribe</a>

                    </div>
                    <div class="card-footer">
                        <p class="text-center"><small> Veg and Non-Veg (Non-Veg Available only on Wednesdays and Sunday
                                for Non-Vegetarians)</small></p>
                    </div>
                </div>

                <h2 class="text-center mt-5">Extra Serve3 Package</h2>
                <div id="meal" class="card pb-3">
                    <img class="card-img-top" src="img/palav800.jpg"  alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.1800/-</h3>
                        <h4 class="card-text">3 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">22 days validity
                            (Suggesting you to have 3 times in a day, If you take 1 time or 2
                            times or 3 times, it will be consider as one day)	</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=4"); ?>" class="btn btn-primary">Subscribe</a>
                    </div>
                    <div class="card-footer py-3">
                        <p class="text-center"><small> Veg and Non-Veg
                                (Non-Veg Available only on Wednesdays and Sunday for Non-Vegetarians)</small></p>
                    </div>
                </div>

            </div>
            <div class="col  col-sm-2 col-md-5 ">
                <div id="midd" class="card text-center ">

                    <div class="card-body">
                        <h4 class="card-title pb-3">when staying alone, studying or working. </h4>

                        <p class="card-text pb-1">We understand  it is not easy to Cook when staying alone, studying or working. Don’t go for Harmful food, that’s not at all good for your Health. </p>
                        <h4 class="card-title pb-3">Do you miss your Home cooked meals? </h4>

                        <p class="card-text pb-3">Well who doesn’t prefer to have plate of delicious Home-cooked meal on reaching home after a long and tiring day at work? Well don’t worry to save you time and to save your efforts we are here, to fill your stomach with home cooked tiffin and  meals
                            We are serving for three times (BF/Lunch/Dinner) each and everyday in week and monthly basis with the best quality, quantity and taste. </p>
                        <h4 class="card-title pb-2">Don’t trust on words?</h4>

                        <p class="card-text pb-3">We have Trail package for you to decide about the quality, quantity and taste, of course about our timing and service too!!!
                            And don’t worry about regular same meal and same breakfast, you will get different food each day according to our weekly menu and every Wednesday and Sunday Non-Veg is available.
                        </p>
                        <h2 class="pb-3">Menu Details </h2>
                        <div class="card ">
                            <div class="card-body">
                                <h5 class="card-header">Breakfast</h5>

                                <div class="pb-3">

                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Poori(3 No.)</td>
                                        <td>Dose (3 No.)</td>
                                        <td>Idli (4 No.)</td>
                                        <td>Chapati (3 No.)</td>
                                        <td>Vegitable Palav</td>
                                    </tr>
                                    <tr>
                                        <td>Vegitable Baath</td>
                                        <td>Tomato Baath</td>
                                        <td>Bisi Bele Baath</td>
                                        <td>Lemon Rice</td>
                                        <td>Pongal</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-header">Lunch</h5>

                                <div class="pb-3">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <td>Rice</td>
                                        <td>Chapati (1 No.)</td>
                                        <td>Sambar</td>
                                        <td>Rasam</td>
                                    </tr>
                                    <tr>
                                        <td>Pakoda or Bajji  </td>
                                        <td>Papad</td>
                                        <td>Pickle</td>
                                        <td> Curd</td>
                                    </tr>
                                    </tbody>
                                </table>
                                </div>

                            </div>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-header">Dinner</h5>

                                    <div class="pb-3">

                                    <table class="table ">
                                        <tbody>
                                        <tr>
                                            <td>Rice</td>
                                            <td>Chapati (1 No.)</td>
                                            <td>Sambar</td>
                                            <td>Curry</td>
                                        </tr>
                                        <tr>
                                            <td>Bonda or Bajji</td>
                                            <td>Pickle</td>
                                            <td> Curd</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    </div>
                                </div>
                        </div>


                    </div>

                </div>
            </div>
            <div class=" col col-md-3.5 ">
                <h2 class="text-center">Mini Serve2 Package</h2>
                <div id="meal" class="card">
                    <img class="card-img-top" src="img/vada800.jpg"  alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.750/-</h3>
                        <h4 class="card-text">2 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner (pick any two times)</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">10 days validity (Suggesting you to have 2 times in a day, If you take 1
                            time or 2 times, it will be consider as one day)</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=3"); ?>" class="btn btn-primary">Subscribe</a>

                    </div>
                    <div class="card-footer">
                        <p class="text-center"><small>Veg and Non-Veg (Non-Veg Available only on Wednesdays and Sunday
                                for Non-Vegetarians)</small></p>
                    </div>


                </div>
                <h2 class="text-center mt-5 mb-1">Extra Serve2 Package</h2>
                <div id="meal" class="card">
                    <img class="card-img-top" src="img/sherva800.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.1400/-</h3>
                        <h4 class="card-text">2 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner (pick any two times)</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">22 days validity
                            (Suggesting you to have 2 times in a day, If you take 1 time or 2 times, it will be consider as one day)</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=5"); ?>" class="btn btn-primary">Subscribe</a>

                    </div>
                    <div class="card-footer">
                        <p class="text-center"><small>Veg and Non-Veg
                                (Non-Veg Available only on Wednesdays and Sunday for Non-Vegetarians)</small></p>
                    </div>


                </div>
            </div>
        </div>

            <h2 class="text-center mt-5">On WED & SUN’S MENU</h2>
              <div class="row align-items-center mb-5 mt-5">
                <div class="col col-md-6">
                    <h3 class="text-center">For Non-Vegetarians</h3>
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-header">Lunch</h5>

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Rice</td>
                                    <td>Parota (1 No.)</td>
                                    <td>Egg Curry</td>
                                    <td>Boiled Egg (1 No.)</td>
                                    <td>Salad</td>
                                </tr>
                                </tbody>
                            </table>
                            <h5 class="card-header">Dinner</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Chicken Palav</td>
                                    <td>Chicken Kebab (3 No)</td>
                                    <td>Sherva</td>
                                    <td>Salad</td>
                                    <td>&nbsp;</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">

                    <h3 class="text-center">For Vegetarians</h3>

                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-header">Lunch</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Ghee Rice/Jeera Rice</td>
                                    <td>Kurma</td>
                                    <td>Vade</td>
                                </tr>
                                </tbody>
                            </table>
                            <h5 class="card-header">Dinner</h5>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Parota/ Chapati (3 No.)</td>
                                    <td>Panner Butter Masala</td>
                                    <td>Vade</td>
                                </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        <div class="row align-items-center mt-5 mb-3">
            <div class="col col-md-3.5">
                <h2 class="text-center">Ultra Serve3 Package</h2>
                <div id="meal" class="card pb-3">
                    <img class="card-img-top" src="img/masala800.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.3600/-</h3>
                        <h4 class="card-text">3 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">40 days validity
                            (Suggesting you to have 3 times in a day, If you take 1 time or 2 times or 3 times , it will be consider as one day)</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=6"); ?>" class="btn btn-primary">Subscribe</a>

                    </div>
                    <div class="card-footer">
                        <p class="text-center"><small> Veg and Non-Veg
                                (Non-Veg Available only on Wednesdays and Sunday for Non-Vegetarians)</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-5">
                <h2 class="text-center mb-3">Reviews and Comments</h2>
                <div class="card py-4">
                    <div class="card-body">
                        <div id="feed1"></div>
                        <div id="feed2"></div>
                            <!--        reviewed     -->
                        <div id="reviewed" class="card my-3" style="display: none;">
                            <div class="card-body">
                                <div class="card-header text-right">
                                    <h5 id="name11" class=" float-left d-inline">name</h5>
                                    <i class="fa fa-star star-rev1" data-index="0"></i>
                                    <i class="fa fa-star star-rev1" data-index="1"></i>
                                    <i class="fa fa-star star-rev1" data-index="2"></i>
                                    <i class="fa fa-star star-rev1" data-index="3"></i>
                                    <i class="fa fa-star star-rev1" data-index="4"></i>
                                </div>


                                <p id="there" class="card-text py-3 text-center">
it must be not shown
                                </p>

                            </div>
                        </div>

                            <!--    still review                        -->
                        <div id="stillreview" class="card my-3" style="" >
                            <div class="card-body">
                                <div class="card-header text-right">
                                    <h5 id="name1" class=" float-left d-inline">name</h5>
                                    <i class="fa fa-star star-rev" data-index="0"></i>
                                    <i class="fa fa-star star-rev" data-index="1"></i>
                                    <i class="fa fa-star star-rev" data-index="2"></i>
                                    <i class="fa fa-star star-rev" data-index="3"></i>
                                    <i class="fa fa-star star-rev" data-index="4"></i>
                                </div>
                                <form>
                                    <div class="form-group">

                                        <textarea id="text" class="form-control py-3"  placeholder="Enter your review"></textarea>
                                    </div>
                                    <input id="here" type="button" name="" value="Review" onclick="updated();" class="btn btn-primary"/>
                                </form>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-3.5">
                <h2 class="text-center">Ultra Serve2 Package</h2>
                <div id="meal" class="card">
                    <img class="card-img-top" src="img/eggcarry800.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                        <h3 class="card-text ">Rs.2700/-</h3>
                        <h4 class="card-text">2 times in a day&nbsp;&nbsp;(for 7 Days) </h4>
                        <h5 class="card-text">Breakfast&nbsp;&nbsp;Lunch&nbsp;&nbsp;Dinner (Pick any two times)	</h5>
                        <h5 class="card-text">Free Home Delivery</h5>
                        <p class="card-text">40 days validity
                            (Suggesting you to have 2 times in a day, If you take 1 time or 2 times, it ll be consider as one day)</p>
                        <a href="check.php?id=<?php echo b64link_encode("pay.php?uid=$id&pid=7"); ?>" class="btn btn-primary">Subscribe</a>
                    </div>
                    <div class="card-footer">
                        <p class="text-center"><small> Veg and Non-Veg
                                (Non-Veg Available only on Wednesdays and Sunday for Non-Vegetarians)</small></p>
                    </div>
                </div>
            </div>
        </div>

</div>

</section>
<!--
####################################################
B R A N D M E S S A G E
####################################################
-->
<section id="brand-message" class="bg-primary py-3">
    <div class="container text-light text-center">
        Healthy <span class="text-light">+</span> Quality <span class="textlight">+</span> Quantity
    </div>
    <!-- /.container -->
</section>

<!--
####################################################
F O O T E R
####################################################
-->
<footer class="py-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                        <h4>Navigation</h4>
                        <nav class="nav d-flex flex-column">
                            <a class="nav-link" href="sss/about.php">About</a>
                            <a class="nav-link" href="sss/contactus.php">Contact Us</a>
                        </nav>
                    </div>


                    <div class="col-md-4">
                        <h5 class="mt-3 mt-sm-0 mt-md-3">Follow Us</h5>

                        <div class="social">
                            <a href="#" id="share-li" class="sharer button">
                                <i class="fab fa-2x fa-linkedin pr-1"></i>
                            </a>
                            <a href="#" id="share-gh" class="sharer button">
                                <i class="fab fa-2x fa-github-square pr-1"></i>
                            </a>
                            <a href="#" id="share-fb" class="sharer button">
                                <i class="fab fa-2x fa-facebook-square pr-1"></i>
                            </a>
                            <a href="#" id="share-tw" class="sharer button">
                                <i class="fab fa-2x fa-youtube-square pr-1"></i>
                            </a>
                        </div>
                    </div>



            <div class="col-md-4">
                <h4 class="mt-4 mt-md-0" id="contact">Contact Us</h4>

                        <!--
                        Generate your local business schema own
                        https://supple.com.au/tools/local-business-schemagenerator/-->
                        <div itemscope itemtype="http://schema.org/LocalBusiness">
                            <a itemprop="url" href="#">
                                <div itemprop="name"><strong>Ootadamane</strong></div>
                            </a>
                            <div itemprop="description"><em>Healthy + Quality + Quantity</em></div>
                            <br>
                            <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <span itemprop="streetAddress">@2732, SNS Road Chamundipuram</span>,
                                <br>
                                <span itemprop="addressLocality">Mysore</span>,
                                <br>
                                <span itemprop="addressRegion"> Karnataka</span>,
                                <span itemprop="postalCode">570008</span>
                                <br>
                                <span itemprop="addressCountry">India</span>.
                                <br>
                            </div>
                            <strong>Call : </strong>
                            <span itemprop="telephone">
                            <a href="tel:+917349353542">(734) 935-3542</a>
                            </span>
                            <br>
                        </div>
                    </div>


            </div>

        </div>

    <div class="justify-content-center text-center ">
        <p class="mt-5 ">
        <hr class="bg-faded-3">
        <small class="text-light">
            © Ootadamane · <a href="sss/privacy.php" class="text-light">Privacy</a> ·
            <a href="sss/terms.php" class="text-light">Terms</a>
        </small>
        </p>
    </div>
</footer>
<!--
####################################################
J A V A S C R I P T - jquery, bootstrap, plugins
Placed at the end of the document so the pages load faster
####################################################
-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="js/vendor/jquery-3.5.1.min.js"></script>
<!-- local fallback in case the CDN is down -->

<!-- Bootstrap core JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<!-- Custom Javascript -->
<script src="js/picturefill.js"></script>
<script src="js/homepage.js"></script>
<!-- Defer scripts that are not critical to the initial page load. -->
<script type="text/javascript">
    function downloadJSAtOnload() {
        var element = document.createElement("script");
// Your scripts would go inside this defer.js
// Use case would be "enhancements" like animations, share buttons, etc.
        element.src = "js/defer.js";
        document.body.appendChild(element);
    }

    if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
    else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
    else window.onload = downloadJSAtOnload;
</script>
<script>
     var flag =<?php echo json_encode($_SESSION['name']);?>;

     var flag2 =<?php echo json_encode($_SESSION['review']);?>;
     var flag3 =<?php echo json_encode($_SESSION['ratedIndex']);?>;
     var n0 =<?php echo json_encode($_SESSION['n0']);?>;

     var d0 =<?php echo json_encode($_SESSION['d0']);?>;

     var r0 =<?php echo json_encode($_SESSION['r0']);?>;
     var n1 =<?php echo json_encode($_SESSION['n1']);?>;

     var d1 =<?php echo json_encode($_SESSION['d1']);?>;

     var r1 =<?php echo json_encode($_SESSION['r1']);?>;
     var readIndex=-1;


    console.log("working");

    window.onload=feed;
    function feed(){
        if(n0 != null) {
            document.getElementById("feed1").innerHTML = ' <div class="card my-3" >\n' +
                '                            <div class="card-body">\n' +
                '                                <div class="card-header text-right">\n' +
                '                                    <h5 id="n0" class=" float-left d-inline">name</h5>\n' +
                '                                    <i class="fa fa-star star-re0" data-index="0"></i>\n' +
                '                                    <i class="fa fa-star star-re0" data-index="1"></i>\n' +
                '                                    <i class="fa fa-star star-re0" data-index="2"></i>\n' +
                '                                    <i class="fa fa-star star-re0" data-index="3"></i>\n' +
                '                                    <i class="fa fa-star star-re0" data-index="4"></i>\n' +
                '                                </div>\n' +
                '\n' +
                '\n' +
                '                                <p id="r0" class="card-text py-3 text-center">\n' +
                'it must be not shown\n' +
                '                                </p>\n' +
                '\n' +
                '                            </div>\n' +
                '                        </div>\n';
        }if(n1 != null) {
            document.getElementById("feed2").innerHTML = ' <div class="card my-3" >\n' +
                '                            <div class="card-body">\n' +
                '                                <div class="card-header text-right">\n' +
                '                                    <h5 id="n1" class=" float-left d-inline">name</h5>\n' +
                '                                    <i class="fa fa-star star-re1" data-index="0"></i>\n' +
                '                                    <i class="fa fa-star star-re1" data-index="1"></i>\n' +
                '                                    <i class="fa fa-star star-re1" data-index="2"></i>\n' +
                '                                    <i class="fa fa-star star-re1" data-index="3"></i>\n' +
                '                                    <i class="fa fa-star star-re1" data-index="4"></i>\n' +
                '                                </div>\n' +
                '\n' +
                '\n' +
                '                                <p id="r1" class="card-text py-3 text-center">\n' +
                'it must be not shown\n' +
                '                                </p>\n' +
                '\n' +
                '                            </div>\n' +
                '                        </div>\n';
        }
         sett();
         review();


    }

    function sett(){
        document.getElementById("n0").innerText=n0;
        document.getElementById("r0").innerText=r0;
        for(var i=0;i <d0 ;i++)
            $('.fa-star.star-re0:eq('+i+')').css('color','#e74c3c');
        document.getElementById("n1").innerText=n1;
        document.getElementById("r1").innerText=r1;
        for(var j=0;j <d1 ;j++)
            $('.fa-star.star-re1:eq('+j+')').css('color','#e74c3c');

    }
function review() {
    document.getElementById("name1").innerText=flag;

    if (flag != null && flag2 != "" && flag3 != "-1") {
        flag3=flag3-1;
        document.getElementById("reviewed").style.display = "";
        document.getElementById("stillreview").style.display = "none";
        document.getElementById("there").innerHTML=flag2;
        document.getElementById("name11").innerText=flag;
        setStarsfix(flag3);
    } else {
        resetStarColors();
        document.getElementById("reviewed").style.display = "none";
        document.getElementById("stillreview").style.display = "";

    }
}
// document.getElementById("here").onclick=updated;
function updated(){
    var rev =document.getElementById("text").value;
    updateDB(rev,readIndex);
        review();


}
function updateDB(msg,rIndex){
    $.ajaxSetup({async:false});
   $.ajax({
        url:"index2.php",method:"POST",datatype:"json",data: {
            update: "1", review:msg,index:rIndex


        },success(){
            flag2=document.getElementById("text").value;
            flag3=readIndex+1;
            console.log(flag3);
            console.log(readIndex);
           }
    });
}
     function setStarsfix(max){

         for(var i=0;i <= max;i++)
             $('.fa-star.star-rev1:eq('+i+')').css('color','#e74c3c');
     }
function resetStarColors(){

    $('.fa-star.star-rev').css('color','black');
}
function setStars(max){

    for(var i=0;i <= max;i++)
        $('.fa-star.star-rev:eq('+i+')').css('color','#e74c3c');
}
$('.fa-star.star-rev').mouseover(function(){

    if(flag3 == "-1") {
        var currentIndex = parseInt($(this).data('index'));
        setStars(currentIndex);
    }
});

$('.fa-star.star-rev').mouseleave(function() {

resetStarColors();
    if(flag3 != "-1") {
        setStars(flag3);
    }
    if(readIndex != -1){
        setStars(readIndex);
    }

});
$('.fa-star.star-rev').on('click',function(){

    if(flag3 == "-1") {
        readIndex = parseInt($(this).data('index'));
        setStars(readIndex);
        console.log(readIndex);
    }

});
</script>
<!-- Google Analytics code goes here if needed -->
</body>
</html>