<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codenpixel.com/demo/foodpicky/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Register</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>
<body>
     <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
         <!--header starts-->
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include 'common/navbar.php' ?>
            <!-- /.navbar -->
         </header>
         
          <img src="images/menu-bg.jpg" height="100px">
            <section class="contact-page inner-page">

               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                  <div class="col-md-2"></div>

                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">
                              <span><a href="#"  data-toggle="modal" data-target="#login-modal">Already have a account?</a></span>
                              <form method="POST" action="script.php">
                                 <div class="row">
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"><b>First Name</b></label>
                                       <input type="text" class="form-control" placeholder="First Name" name="firstName"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"><b>Last Name</b></label>
                                       <input type="text" class="form-control" placeholder="Last Name" name="lastName"> 
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1"><b>Email address</b></label>
                                       <input type="email" aria-describedby="emailHelp" placeholder="username@email.com" name="email" class="form-control"> 
                                       <label for="exampleInputEmail1"><b>Phone number</b></label>
                                       <input type="tel" placeholder=""  name="phone" class="form-control"> 
                                       <label for="exampleInputPassword1"><b>Password</b></label>
                                       <input type="password" placeholder="Password" name="password" class="form-control">
                                       <br>
                                       <label for="exampleInputPassword1"><b>Repeat password</b></label>
                                       <input type="password" class="form-control" placeholder="Password" name="repeat" class="form-control">  
                                    </div>
                           
                                       
                             

                                 </div>
                                 <div class="row">
                                    
                                 
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <input type="submit" class="btn theme-btn" name="submit" value="register">

                                    </div>
                                      
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                  <div class="col-md-2"></div>

                     
                  </div>
               </div>
            </section>
            <section class="app-section">
               <div class="app-wrap">
                  <div class="container">
                     <div class="row text-img-block text-xs-left">
                        <div class="container">
                           <div class="col-xs-12 col-sm-6  right-image text-center">
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
           <?php include 'common/footer.php' ?>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
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
    <script src="js/bar.js"></script>

</body>


<!-- Mirrored from codenpixel.com/demo/foodpicky/registration.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:39 GMT -->
</html>