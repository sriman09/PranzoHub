<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codenpixel.com/demo/foodpicky/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:32 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Profile</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
    <body onload="selectFunction()">
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include 'common/navbar.php';?>
            <!-- /.navbar -->
         </header>
        
            <!-- top Links -->
           
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="hero bg-image" data-image-src="images/7.jpg">
               <div class="hero-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                           <div class="image-wrap">
                              <figure><img src="images/01.jpg" height="170" width="210" alt="Profile Image"></figure>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                           <div class="pull-left right-text white-txt" style="z-index: 10">
                              <h6 style="font-size: 50px; color: #fff"><a href="#">PranzoHub</a></h6>
                              <a class="btn btn-small btn-green">Closed</a>
                              <p>Breakfast,Launch and Dinner</p>
                              <ul class="nav nav-inline">
                                <!--  <li class="nav-item"> <a class="nav-link active" href="#"><i class="fa fa-check"></i> Min $ 10,00</a> </li>
                                 <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-motorcycle"></i> 30 min</a> </li>
                                 <li class="nav-item ratings">
                                    <a class="nav-link" href="#"> <span>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span> </a>
                                 </li> -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end:Inner page hero -->
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     
                     <li>Profile</li>
                  </ul>
               </div>
            </div>
            <div class="container m-t-30">
               <div class="row">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                     <div class="sidebar clearfix m-b-20">
                        <div class="main-block">
                           <div class="sidebar-title white-txt">
                              <h6>Choose Breakfast</h6>
                              <i class="fa fa-cutlery pull-right"></i> 
                           </div>
                           <ul>
                                 <li><label class="custom-control custom-radio">
                                    <input id="veg-select" name="radio" type="radio" class="custom-control-input" onclick="selectFunction()"> 
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Veg Breakfast</span> </label>
                                 </li>    
                                 <li> <label class="custom-control custom-radio">
                                    <input id="nonveg-select" name="radio" type="radio" class="custom-control-input" onclick="selectFunction()"> 
                                    <span class="custom-control-indicator"></span> 
                                    <span class="custom-control-description">Non-Veg Breakfast</span> 
                                    </label>
                                 </li>
                                 <li> <label class="custom-control custom-radio">
                                     <input id="smoothie-select" name="radio" type="radio" class="custom-control-input" onclick="selectFunction()"> 
                                     <span class="custom-control-indicator"></span> 
                                     <span class="custom-control-description">Smoothies</span>
                                     </label>
                                 </li>
                              
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                        <!-- end:Sidebar nav -->
                       <!--  <div class="widget-delivery">
                           <form>
                              <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                 <label class="custom-control custom-radio">
                                 <input id="radio1" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                              </div>
                              <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                 <label class="custom-control custom-radio">
                                 <input id="radio2" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                              </div>
                           </form>
                        </div> -->
                     </div>
                     <!-- end:Left Sidebar -->
                     <div class="widget clearfix">
                        <!-- /widget heading -->
                       <!--  <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Popular tags
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="widget-body">
                           <ul class="tags">
                              <li> <a href="#" class="tag">
                                 Coupons
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Discounts
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Deals
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Amazon 
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Ebay
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Fashion
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Shoes
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Kids
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Travel
                                 </a> 
                              </li>
                              <li> <a href="#" class="tag">
                                 Hosting
                                 </a> 
                              </li>
                           </ul>
                        </div> -->
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                     <div class="menu-widget m-b-30">
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Breakfast<a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in">
                           <div class="food-item white hidden" id="veg">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/food4.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Veg Breakfast Subscription</a></h6>
                                       <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹900.00 / MONTH</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Add to Cart</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                           <div class="food-item white hidden" id="nonveg">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/food5.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Non-Veg Breakfast</a></h6>
                                       <p> Burgers, American, Sandwiches, Fast Food, BBQ</p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹900.00 / MONTH</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Add to Cart</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                           
                          
                        
                        </div>
                        <!-- end:Collapse -->
                     </div>
                     <!-- end:Widget menu -->
                     <div class="menu-widget" >
                        <div class="widget-heading">
                           <h3 class="widget-title text-dark">
                              Beverages<a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                           <div class="clearfix"></div>
                        </div>
                        <div class="collapse in" id="popular2">
                           <div class="food-item hidden" id="smoothie">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-12 col-lg-8">
                                    <div class="rest-logo pull-left">
                                       <a class="restaurant-logo pull-left" href="#"><img src="images/food4.jpg" alt="Food logo"></a>
                                    </div>
                                    <!-- end:Logo -->
                                    <div class="rest-descr">
                                       <h6><a href="#">Smoothies</a></h6>
                                       <p> </p>
                                    </div>
                                    <!-- end:Description -->
                                 </div>
                                 <!-- end:col -->
                                 <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">₹300.00 / MONTH</span> <a href="#" class="btn btn-small btn btn-secondary pull-right" data-toggle="modal" data-target="#order-modal">Add to Cart</a> </div>
                              </div>
                              <!-- end:row -->
                           </div>
                           <!-- end:Food item -->
                         
                           
                        </div>
                        <!-- end:Collapse -->
                     </div>
                     <!-- end:Widget menu -->
                     
                     <!--/row -->
                  </div>
                  <!-- end:Bar -->
                  <div class="col-xs-12 col-md-12 col-lg-3">
                     <div class="sidebar-wrap">
                        <div class="widget widget-cart">
                           <div class="widget-heading">
                              <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                              <div class="clearfix"></div>
                           </div>
                           <div class="order-row bg-white">
                              <div class="widget-body">
                                 <div class="title-row">Pizza Quatro Stagione <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0" id="exampleSelect1">
                                          <option>Size SM</option>
                                          <option>Size LG</option>
                                          <option>Size XL</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" type="number" value="2" id="example-number-input"> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="order-row">
                              <div class="widget-body">
                                 <div class="title-row">Carlsberg Beer <a href="#"><i class="fa fa-trash pull-right"></i></a></div>
                                 <div class="form-group row no-gutter">
                                    <div class="col-xs-8">
                                       <select class="form-control b-r-0">
                                          <option>Size SM</option>
                                          <option>Size LG</option>
                                          <option>Size XL</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-4">
                                       <input class="form-control" value="4" id="quant-input"> 
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end:Order row -->
                           <div class="widget-delivery clearfix">
                              <form>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio4" name="radio" type="radio" class="custom-control-input" checked=""> <span class="custom-control-indicator"></span> <span class="custom-control-description">Delivery</span> </label>
                                 </div>
                                 <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6 b-t-0">
                                    <label class="custom-control custom-radio">
                                    <input id="radio3" name="radio" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Takeout</span> </label>
                                 </div>
                              </form>
                           </div>
                           <div class="widget-body">
                              <div class="price-wrap text-xs-center">
                                 <p>TOTAL</p>
                                 <h3 class="value"><strong>$ 25,49</strong></h3>
                                 <p>Free Shipping</p>
                                 <button onclick="location.href='checkout.html'" type="button" class="btn theme-btn btn-lg">Checkout</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    
                  <!-- end:Right Sidebar -->
               </div>
               <!-- end:row -->

            </div>
            <!-- end:Container -->
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6 hidden-xs-down right-image text-center">
                              <figure> <img src="images/app.png" alt="Right Image"> </figure>
                           </div>
                           <div class="col-xs-12 col-sm-6 left-text">
                              <h3>The Best Food Delivery App</h3>
                              <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                              <div class="social-btns">
                                 <a href="#" class="app-btn apple-button clearfix">
                                    <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                 </a>
                                 <a href="#" class="app-btn android-button clearfix">
                                    <div class="pull-left"><i class="fa fa-android"></i> </div>
                                    <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- start: FOOTER -->
           <?php include 'common/footer.php'; ?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
      <!-- Modal -->
      <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
               <div class="modal-body cart-addon">
                  <div class="food-item white">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="images/pepsi.png" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect2">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-2"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="images/cola.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 2.49</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect3">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-3"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="images/fanta.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 1.99</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect5">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-4"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
                  <div class="food-item">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                           <div class="item-img pull-left">
                              <a class="restaurant-logo pull-left" href="#"><img src="images/beer.jpg" alt="Food logo"></a>
                           </div>
                           <!-- end:Logo -->
                           <div class="rest-descr">
                              <h6><a href="#">Sandwich de Alegranza Grande Menü (28 - 30 cm.)</a></h6>
                           </div>
                           <!-- end:Description -->
                        </div>
                        <!-- end:col -->
                        <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">$ 3.15</span></div>
                        <div class="col-xs-6 col-sm-4 col-lg-4">
                           <div class="row no-gutter">
                              <div class="col-xs-7">
                                 <select class="form-control b-r-0" id="exampleSelect6">
                                    <option>Size SM</option>
                                    <option>Size LG</option>
                                    <option>Size XL</option>
                                 </select>
                              </div>
                              <div class="col-xs-5">
                                 <input class="form-control" type="number" value="0" id="quant-input-5"> 
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end:row -->
                  </div>
                  <!-- end:Food item -->
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn theme-btn">Checkout</button>
               </div>
            </div>
         </div>
      </div>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    <script src="js/selection.js"></script>
    <script src="js/bar.js"></script>
</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
</html>
