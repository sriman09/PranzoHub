<?php 
      include 'scripts/db_connection.php';

      $selectQuery = "SELECT * FROM `breakfast_details`";
      $selectResult = $conn->query($selectQuery);
      $i = '';

?>      

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codenpixel.com/demo/foodpicky/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Subscribe</title>
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
            <?php include 'common/navbar.php';?>
            <!-- /.navbar -->
         </header>
         
            <div class="hero bg-image space-md" data-image-src="images/profile-banner.jpg">
               <div class="hero-inner text-xs-center m-b-20">
                  <h1 class="font-white">Choose your Subscription</h1>
                  <p class="font-white">Monthly Basics Subscriptions at a affordiable price range</p>
               </div>
            </div>
            <!-- end:Inner page hero -->

            <div class="pricing-page">

               <div class="container">
                 <div class="row">
                    <?php
                      for($i=0;$i<3;$i++)
                      {
                            if ($selectResult->num_rows > 0) {
                                         // output data of each row
                                         $selectData = $selectResult->fetch_assoc() 
                                         
                     ?>     
                     <div class="col-md-4 col-sm-6">
                        <div class="pricing-box">
                           <span class="price">
                          
                           <span class="currency">₹</span><?=$selectData['price'];?></span>
                           <h2><?=$selectData['breakfast_name'];?></h2>
                           
                      
                           <img src="<?=$selectData['photo'];?>">
                           <div data-group=""> <a href="#" class="btn theme-btn" data-toggle="modal" data-target="#order-modal<?=$selectData['breakfast_id'];?>">Subscribe</a> </div>
                        </div>
                     </div>

                     <!-- modal -->
                     <div class="modal fade" style="  box-shadow: 5px 5px 5px 1px rgba(0, 0, 2, .2);" id="order-modal<?=$selectData['breakfast_id'];?>" tabindex="-1" role="dialog" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-contents">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                 <div class="modal-body cart-addon">
                                    <div class="food-item white">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-6 col-lg-6">
                                             <div class="item-img pull-left">
                                                <a class="restaurant-logo pull-left" href="#"><img src="<?=$selectData['photo'];?>" alt="Food logo"></a>
                                             </div>
                                             <!-- end:Logo -->
                                              
                                             <div class="rest-descr">
                                                <h6><a href="#"><?=$selectData['breakfast_name'];?>
                                                </a></h6>
                                             </div>
                                             <!-- end:Description -->
                                          </div>
                                          <!-- end:col -->
                                          <?php 
                                          $price='';
                                          $price=$selectData['price'];
                                          ?>

                                          <div class="col-xs-6 col-sm-2 col-lg-2 text-xs-center"> <span class="price pull-left">₹<?=$price;?>/Month</span></div>
                                          <div class="col-xs-6 col-sm-4 col-lg-4">
                                             <div class="row no-gutter">
                                                <div class="col-xs-5">
                                                 
                                                </div>
                                                <div class="col-xs-7">
                                                   <B>MONTHS</B>
                                                   <input class="form-control" type="number" value="0" id="quantity"> 
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- end:row -->
                                    </div>
                                    <!-- end:Food item -->
                                   
                                    <!-- end:Food item -->
                                    
                                       <!-- end:row -->
                               
                                    <!-- end:Food item -->
                                    
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="checkout.php" class="btn theme-btn">Checkout</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                       <?php }
                    }
                    ?>
                      
                    </div>


                  </div>

                  <!-- end:row -->
                   
              </div>
          

            <?php include'module/appSection.php'; ?>
           

            <!-- start: FOOTER -->
          <?php include 'common/footer.php'; ?>
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


<!-- Mirrored from codenpixel.com/demo/foodpicky/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 May 2018 04:52:38 GMT -->
</html>

<!-- calculate bill -->
<script type="text/javascript">
  function calculateBill()
  {
   
  }
</script>

<!-- fetch data -->
