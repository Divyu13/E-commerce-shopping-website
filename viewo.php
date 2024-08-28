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

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="custom-select-box">
                  
                    </div>
                                    
                </div>
                
                    <div class="text-slid-box">
                        
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="nav-item"><a class="nav-link" href="adminhome.php">Admin Home</a></li>
						<li class="nav-item"><a class="nav-link" href="add.php">Add Product</a></li>
						
						<li class="nav-item"><a class="nav-link" href="edit.php">Edit/Delete</a></li>
						<li class="nav-item active"><a class="nav-link" href="viewo.php">View order</a></li>
                    <li class="nav-item"><a class="nav-link" href="viewc.php">View Customer</a></li>
                                         <li class="nav-item"><a class="nav-link" href="viewmail.php">View Mail</a></li>
                                         <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li></ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
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
                    <h2>View Order</h2>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    
    <!-- End My Account -->

    <!-- Start Instagram Feed  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>List of Orders</h2>
                      <?php
                      
                      $link=mysqli_connect("localhost","root","","test");
                      if($link===false)
                      {die("ERROR:Could not connect." .mysqli_connect_error());}
                      $sql="SELECT * FROM booking ";
                      if($result=mysqli_query($link,$sql)){
                          if(mysqli_num_rows($result)>0)
                          {
                              echo "<table width=80% cellspacing=10 border=1>";
                              echo"<thead bgcolor=lightgreen><tr>";
                              echo"<th>Username</th>";
                              echo"<th>Amount</th>";
                              echo"<th>Name</th>";
                              echo"<th>Mobile Number</th>";
                              echo"<th>Landmark</th>";
                              echo"<th>City</th>";
                              echo"<th>Address</th>";
                              echo"</tr></thead>";
                              while($row=mysqli_fetch_array($result)){
                                  echo"<tr>";
                                  echo"<td>" . $row['uname'] . "</td>";
                                  echo"<td>" .$row['amt'] . "</td>";
                                  echo"<td>" .$row['name'] . "</td>";
                                  echo"<td>" .$row['mob'] . "</td>";
                                  echo"<td>" .$row['lm'] . "</td>";
                                  echo"<td>" .$row['city'] . "</td>";
                                  echo"<td>" .$row['addr'] . "</td>";
                                  echo"</tr>";
                              }
                              echo"</table>";
                              mysqli_free_result($result);
                          }
                          else{
                              echo"No records matching your query were found.";
                          }
                      }
                      else{
                          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                      }
                      mysqli_close($link);
                      ?>
                    </div>
                </div>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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