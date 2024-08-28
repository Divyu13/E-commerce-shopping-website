<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Fashion Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php
session_start();
//$amt=$_REQUEST['tot'];
//echo $amt;

foreach($_REQUEST['itname'] as $it)
{
$itname[]=$it;
}
foreach($_REQUEST['p'] as $p1)
{
$p[]=$p1;
}
foreach($_REQUEST['qty'] as $qty1)
{
$qty[]=$qty1;
}
foreach($_REQUEST['ittotal'] as $tt)
{
$t[]=$tt;
}

//$total=$_REQUEST['tot'];*/
//$amtp=$total*$p;
 include("dbinfo.php");
       $con=mysqli_connect($server,$username,$password,$database);
       if(!$con)
       {
      die('Could not connect:'.mysqli_error($con));
       }
       $Username=$_SESSION['UNAME'];
       for($i=0;$i<count($itname);$i++)
       {
       $sql="Insert into cart(uname,itname,price,qty,total) values ('$Username','$itname[$i]','$p[$i]','$qty[$i]','$t[$i]')";
       
       if(!mysqli_query($con,$sql))
       {
        die('error:'.mysqli_error($con));
       }
       
       else{
       ##echo'<h2 align="center" class="style9"><font color="green"><marquee>items added to Cart</marquee></h2>';
       }}
       mysqli_close($con);
?>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                                          </div>
                    <div class="right-phone-box">
                        
                    </div>
                    <div class="our-link">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="userhome.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="myorder.php">My Order</a></li>
                         <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                        <li class="nav-item active"><a class="nav-link" href="logout.php">logout</a></li>
                        
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        
						<i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
							<a href="myorder.php">My Cart</a>
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shipping details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <form id="" action="placeorder.php" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    Order type:<br>
                                    COD<BR>
                                    <div class="form-group">
                                        Full Name:
<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                             <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
Mobile Number:<input type="text" placeholder="mobile number" id="email" class="form-control" name="mob" required data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
Landmark:<input type="text" class="form-control" id="subject" name="lm" placeholder="landmark" required data-error="Please enter your landmark">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
Town/city:<input type="text" class="form-control" id="subject" name="city" placeholder="town/city" required data-error="Please enter your city/town">
Address Type:
<br><select name="addr">
    <option value="home">Home</option>
    <option value="office">Office</option>
    <option value="">commercial</option>
</select>

<input type="hidden" name="tot" value="<?php echo $amt ;?>">

<input type="submit" class="form-control" value="Deliver to this address" id="subject" name="b1">

                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                       
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            <?php
            #session_start();
            if(isset($_POST['b1']))
            {
                $amt=$_POST['tot'];
                $uname=$_SESSION['UNAME'];
                $name=$_POST['name'];
                $mob=$_POST['mob'];
                $city=$_POST['city'];
                $addr=$_POST['addr'];
                $lm=$_POST['lm'];
                include("dbinfo.php");
                $con=mysqli_connect($server,$username,$password,$database);
                if(!$con)
                {
                    die('could not connect'.mysqli_error($con));
                }
                $sql="insert into booking(uname,amt,name,mob,city,lm,addr) values
                ('$uname','$amt','$name','$mob','$city','$lm','$addr')";
                if(!mysqli_query($con,$sql))
                {
                    die('error:'.mysqli_error($con));
                }
                else{
                    echo'<h2 align="center" class="style9"><font color="green"><marquee>Order Placed</marquee></h2>'; 
                }
                mysqli_close($con);
            }
            ?>
           
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>