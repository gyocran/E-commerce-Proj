<!--
Author : Stephanie Belnye 
Description : This page allows the employees to edit teh Shipping details of an item purchased 
-->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Shipping Details 
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/pop-up.css" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div> <!--
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.html">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div> -->
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->
 <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Jewellery Shop</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i> 
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">Items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->


            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="index.html">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">ENGAGEMENT<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Engagement</h5>
                                            <ul>
                                                <li><a href="category.html">Women's Wedding Bands</a>
                                                </li>
                                                <li><a href="category.html">Men's Wedding Bands</a>
                                                </li>
                                                <li><a href="category.html">Bridal Jewellery</a>
                                                </li>
                                                <li><a href="category.html">Engagement Rings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner3.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Jewellery <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Women's Jewellery</h5>
                                            <ul>
                                                <li><a href="category.html">Necklaces</a>
                                                </li>
                                                <li><a href="category.html"Rings</a>
                                                </li>
                                                <li><a href="category.html">Earrings</a>
                                                </li>
                                                <li><a href="category.html">Charms</a>
                                                </li>
                                                <li><a href="category.html">Brooches</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Men's Jewelry</h5>
                                            <ul>
                                                <li><a href="category.html">Cufflinks</a>
                                                </li>
                                                <li><a href="category.html">Rings</a>
                                                </li>
                                                <li><a href="category.html">Pendants</a>
                                                </li>
                                                <li><a href="category.html">Bracelets</a>
                                                </li>
                                                <li><a href="category.html">Earrings</a>
                                                </li>
                                                <li><a href="category.html">Necklaces</a>
                                                </li>
                                            </ul>
                                        </div>
                                      
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">WATCHES <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="index.html">Obaju Watches</a>
                                                </li>
                                                <li><a href="category.html">Men's Watches</a>
                                                </li>
                                                <li><a href="category-right.html">Women's Watches</a>
                                                </li>
                                                <li><a href="category-full.html">Diamond Watches</a>
                                                </li>
                                                  </li>
                                                <li><a href="category.html">Pink Gold Watches</a>
                                                </li>
                                            </ul>
                                      
                                    </div>
                                </div>
                                               <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">GIFTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="category.html">Valentine's Day Gifts</a>
                                                </li>
                                                <li><a href="category.html">Wedding Gifts</a>
                                                </li>
                                                <li><a href="category.html">Anniversary Gifts</a>
                                                </li>
                                                <li><a href="category.html">Gifts for Him</a>
                                                </li>
                                                <li><a href="category.html">Gifts for Her</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

           
              <!--   <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form> -->

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
 
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="homepage.php">Home</a>
                        </li>
                        <li>My orders</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Employee Section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="addcust&emp.html"><i class="fa fa-user"></i> Add New Member</a>
                                </li>
                                <li>
                                    <a href="editcust&emp.html"><i class="fa fa-user"></i> Edit Member Details</a>
                                </li>
                                <li>
                                    <a href="createOrders.php"><i class="fa fa-list"></i> Create Orders</a>
                                </li>
                                 <li>
                                    <a href="editShippingDetails.php"><i class="fa fa-list"></i> Edit Shipping Details</a>
                                </li>
                                <li>
                                    <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>Edit  Member Details </h1>
                        <p class="lead">Edit the details of the customer</p>
                        <hr>
            
<?php
    include_once ("users.php");
    $user= new users();
    $sno="";
    $Customer_name="";
    $Item="";
    $Price="";
    $Delivery_method="";
    $Payment_method="";
    $Address="";
    $Phone_number="";
    $Country="";

    

    if (isset($_REQUEST['sno']))
    {
        $sno= $_REQUEST['sno'];
        $r=$user->getShippingDetails($sno);
        if (!$r)
        {
        echo "Unsuccessful";
        return;
        }

        while ($result=$user-> fetch())
        {
        $sno=$result['sno'];
        $Customer_name=$result['Customer_name'];
        $Item= $result['Item'];
        $Price= $result['Price'];
        $Delivery_method= $result['Delivery_method'];
        $Payment_method= $result['Payment_method'];
        $Address= $result['Address'];
        $Phone_number= $result['Phone_number'];
        $Country= $result['Country'];
        }


    }
?>

<html>
    <head>
    </head>
    <body>
    <form action="editShippingDetails.php" method="GET" onsubmit='validate()'>
    <div>
            <div>sno: <input type="text" value="<?php echo $sno?>" name="sno"/></div>
            <div>Customer_name: <input type="text" value="<?php echo $Customer_name ?>" name="Customer_name"/></div>
            <div>Item: <input type="text" value="<?php echo $Item ?>" name="Item"/></div>
            <div>Price: <input type="text" value="<?php echo $Price ?>" name="Price"/></div>
            <div>Delivery_method: <input type="text" value="<?php echo $Delivery_method ?>"  name="Delivery_method"/></div>
            <div>Payment_method: <input type="text" value="<?php echo $Payment_method ?>" name="Payment_method"/></div>
            <div>Address: <input type="text" value="<?php echo $Address ?>" name="Address"/></div>
             <div>Phone_number: <input type="text" value="<?php echo $Phone_number ?>" name="Phone_number"/></div>
              <div>Country: <input type="text" value="<?php echo $Country ?>" name="Country"/></div>
            </div>
<div><input type="submit" value="Edit" name="up" > </div>

</form>

</body>
</html>


<?php
    if (isset($_REQUEST['up']))
    {
        $user= new users();
        $sno=$_REQUEST['sno'];
        $Customer_name= $_REQUEST['Customer_name'];
        $Item= $_REQUEST['Item'];
        $Price= $_REQUEST['Price'];
        $Delivery_method= $_REQUEST['Delivery_method'];
        $Payment_method= $_REQUEST['Payment_method'];
        $Address= $_REQUEST['Address'];
        $Phone_number= $_REQUEST['Phone_number'];
        $Country= $_REQUEST['Country'];
        
        

        $result1= $user-> editShippingDetails($sno, $Customer_name,$Item, $Price, $Delivery_method, $Payment_method, $Address, $Phone_number, $Country);
        if (!$result1){
            echo "error occured while trying to update";
        }
        else {
            echo "updated successfully";
        }

    }

?>
                </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="text.html">About us</a>
                            </li>
                            <li><a href="text.html">Terms and conditions</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="contact.html">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="register.html">Regiter</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        <h5>Men</h5>

                        <ul>
                            <li><a href="category.html">T-shirts</a>
                            </li>
                            <li><a href="category.html">Shirts</a>
                            </li>
                            <li><a href="category.html">Accessories</a>
                            </li>
                        </ul>

                        <h5>Ladies</h5>
                        <ul>
                            <li><a href="category.html">T-shirts</a>
                            </li>
                            <li><a href="category.html">Skirts</a>
                            </li>
                            <li><a href="category.html">Pants</a>
                            </li>
                            <li><a href="category.html">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Where to find us</h4>

                        <p><strong>Obaju Ltd.</strong>
                            <br>13/25 New Avenue
                            <br>New Heaven
                            <br>45Y 73J
                            <br>England
                            <br>
                            <strong>Great Britain</strong>
                        </p>

                        <a href="contact.html">Go to contact page</a>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->



                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        <h4>Stay in touch</h4>

                        <p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious.com</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>



</body>

</html>
