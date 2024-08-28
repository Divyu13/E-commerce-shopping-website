<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>FashionShop</title>
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

<body>
  
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                  <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="aboutus.php">About Us</a></li>
           <li class="nav-item"><a class="nav-link" href="signup.php">SignUp/SignIn</a></li>
                     <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
        
                                  <li class="nav-item active"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contactus.php">Contact Us</a></li>
                          <li class="nav-item"><a class="nav-link" href="logout.php">LogOut</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

              <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    </div>
                <!-- End Atribute Navigation -->
            </div>
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
                    <h2>Gallery</h2>
                   
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
                    <div class="title-all text-center">
                        <h1>Our Gallery</h1>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".bulbs">tops</button>
                            <button data-filter=".fruits">kurtis</button>
			    <button data-filter=".podded-vegetables">Jeans</button>
			    <button data-filter=".root-and-tuberous">tshirts</button>
                            
                        </div>
                    </div>
                </div>
            </div>
 <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="">
                            <div class="type-lb">
                               
                            </div>
                            <a href="top1.php">   <img src="images/croptops/ct1.jpg" class="img-fluid" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb">
                               
                            </div>
                            
                            <a href="kurtis.php">   <img src="images/kurti/k1.jpg" class="img-fluid" alt="Image">
                            </a>
                                </div>                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb"></div>
                            <a href="top1.php"> <img src="images/croptops/ct2.jpg" class="img-fluid" alt="Image"></a>
                           
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid fruits">
                    <div class="products-single fix">
                        <div class=""> <div class="type-lb"></div>                           
                            <a href="kurtis.php"> <img src="images/kurti/k2.jpg" class="img-fluid" alt="Image">
                            </a> 
                        </div>                        
                    </div>
                </div>
			<div class="col-lg-3 col-md-6 special-grid bulbs">
                    <div class="products-single fix">
                        <div class="">
                            <div class="type-lb">
                               
                            </div>
                            <a href="top1.php">   <img src="images/croptops/ct3.jpg" class="img-fluid" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>	
                <div class="col-lg-3 col-md-6 special-grid fruits">
                     <div class="products-single fix">
                        <div class=""><div class="type-lb">
                               
                            </div>
                            
                            <a href="kurtis.php">   <img src="images/kurti/k3.jpg" class="img-fluid" alt="Image">
                            </a>
                                </div>                        
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb"></div>
                            <a href="jeans.php"><img src="images/jeans/j1.jpg" class="img-fluid" alt="Image"></a>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class="">     <div class="type-lb"></div>                       
                            <a href="tshirts.php"><img src="images/tshirts/ts1.jpg" class="img-fluid" alt="Image">
                            </a>  
                        </div>                        
                    </div>
                </div>
				
				<div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class=""> <div class="type-lb"></div>                           
                            <a href="tshirts.php"><img src="images/tshirts/ts2.jpg" class="img-fluid" alt="Image">
                            </a> 
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb"></div>
                            <a href="jeans.php"><img src="images/jeans/j3.jpg" class="img-fluid" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid root-and-tuberous">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb"></div>                           
                            <a href="tshirts.php">  <img src="images/tshirts/ts4.jpg" class="img-fluid" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid podded-vegetables">
                    <div class="products-single fix">
                        <div class=""><div class="type-lb"></div>
                            <a href="jeans.php"><img src="images/jeans/j5.jpg" class="img-fluid" alt="Image">
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- End Instagram Feed  -->

   
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