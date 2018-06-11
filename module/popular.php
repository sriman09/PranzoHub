 <?php       //db connection
              include 'scripts/db_connection.php';

             $selectQuery = "SELECT * FROM `breakfast_details`";
             $selectResult = $conn->query($selectQuery);

            
 ?>



 <section class="popular">
            <div class="container">
                <div class="title text-xs-center m-b-30">
                    <h2>Choose your Breakfast Subscription</h2>
                    <p class="lead">The easiest way to kickstar your day</p>
                </div>
                <div class="row">
                    <!-- Each popular food item starts -->
                    <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                        <div class="food-item-wrap">
                            <?php 
                                         if ($selectResult->num_rows > 0) {
                                         // output data of each row
                                         if($selectData = $selectResult->fetch_assoc()) {
                                            ?>
                            <div class="figure-wrap bg-image" data-image-src="<?=$selectData['photo'];?>">
                                <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                            </div>
                            <div class="content">
                                <h5><a href="profile.html"><?=$selectData['breakfast_name'];?> </a></h5>
                               
                                 <div class="product-name"><?=$selectData['message'];?> </div>
                                <div class="price-btn-block"> <span class="price">₹<?=$selectData['price'];?>/MONTH </span> <a href="#" class="btn theme-btn-dash pull-right">Add to Cart</a> </div>
                          
                            </div>
                            <div class="restaurant-block">
                                <div class="left">
                                    <a class="pull-left" href="profile.php"> <img src="images/01.jpg" height="45" width="50"alt="Restaurant logo" /> </a>
                                    <div class="pull-left right-text"> <a href="profile.php"><?=$selectData['vendor'];?></a> <span>Bhubaneswar</span> </div>
                                </div>
                                <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                            <?php }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <!-- Each popular food item starts -->
                    <!-- Each popular food item starts -->
                    <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                        <div class="food-item-wrap">
                             <?php 
                                         if ($selectResult->num_rows > 0) {
                                         // output data of each row
                                         if($selectData = $selectResult->fetch_assoc()) {
                                            ?>
                            <div class="figure-wrap bg-image" data-image-src="<?=$selectData['photo'];?>">
                                <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                            </div>
                            <div class="content">
                                <h5><a href="profile.html">
                                  
                                               <?=$selectData['breakfast_name'];?></a></h5>
                                <div class="product-name">  <?=$selectData['message'];?></div>
                                <div class="price-btn-block"> <span class="price">₹<?=$selectData['price'];?>/MONTH </span> <a href="#" class="btn theme-btn-dash pull-right">Add to Cart</a> </div>
                         
                            </div>
                            <div class="restaurant-block">
                                <div class="left">
                                    <a class="pull-left" href="profile.php"> <img src="images/01.jpg" height="45" width="50" alt="Restaurant logo" /> </a>
                                    <div class="pull-left right-text"> <a href="profile.php"><?=$selectData['vendor'];?></a> <span>Bhubaneswar</span> </div>
                                </div>
                                <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                            <?php }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <!-- Each popular food item starts -->
                    <!-- Each popular food item starts -->
                    <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                        <div class="food-item-wrap"> 
                            <?php 
                                         if ($selectResult->num_rows > 0) {
                                         // output data of each row
                                         if($selectData = $selectResult->fetch_assoc()) {
                                            ?>
                            <div class="figure-wrap bg-image" data-image-src="<?=$selectData['photo'];?>">
                                <div class="distance"><i class="fa fa-pin"></i>1240m</div>
                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                            </div>
                            <div class="content">
                                <h5><a href="profile.html">
                                               <?=$selectData['breakfast_name'];?></a></h5>
                                <div class="product-name"><?=$selectData['message'];?></div>
                                <div class="price-btn-block"> <span class="price">₹<?=$selectData['price'];?>/MONTH </span> <a href="#" class="btn theme-btn-dash pull-right">Add to Cart</a> </div>
                            </div>
                           
                            <div class="restaurant-block">
                                <div class="left">
                                    <a class="pull-left" href="profile.php"> <img src="images/01.jpg" height="45" width="50" alt="Restaurant logo" /> </a>
                                    <div class="pull-left right-text"> <a href="profile.php"><?=$selectData['vendor'];?></a> <span>Bhubaneswar</span> </div>
                                </div>
                                <div class="right-like-part pull-right"> <i class="fa fa-heart-o"></i> <span>48</span> </div>
                            <?php }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <!-- Each popular food item starts -->
                </div>
            </div>
        </section>