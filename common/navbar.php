<?php
//Session start 
    session_start();
    $name = '';
    $email = '';
    if (isset($_SESSION['bazooka'])) {
        $email = $_SESSION['bazooka'];
        // //get user data
        // $getUserDataQuery = "SELECT * FROM `user` WHERE `email` = '$email'";
        
       
        } 

    
?>
<nav class="navbar navbar-dark">
                <div class="container" id="heroimage">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/icon.png" height="91" width="91" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="subscribe.php">Subscribe <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="about.php">About Us <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="contact.php">Contact Us <span class="sr-only">(current)</span></a> </li>


                            <?php
                                if (!isset($_SESSION['bazooka']))
                                {
                                   
                                
                             ?>

                             <li class="nav-item"><a href="#" class="btn theme-btn-new" data-toggle="modal" data-target="#login-modal">Login/Sign Up</a></li>
                             <?php
                                } 
                                else
                                {
                            ?>    
                                 <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="pricing.html">Pricing</a> <a class="dropdown-item" href="contact.html">Contact</a> <a class="dropdown-item" href="submition.html">Submit restaurant</a> <a class="dropdown-item" href="registration.html">Registration</a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item" href="checkout.html">Checkout</a> </div>
                            
                                <li class="nav-item">
                                    <button type="button" class="btn theme-btn-dash" onclick="">Log out</button>
                                </li>
                            <?php  
                                 session_destroy();
                               }
                            ?>   

                        
                      <!--       <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="food_results.html">Food results</a> <a class="dropdown-item" href="map_results.html">Map results</a></div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.html">Search results</a> <a class="dropdown-item" href="profile.html">Profile page</a></div>
                            </li> -->
                           
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

 <?php include 'common/modal.php'; ?>
