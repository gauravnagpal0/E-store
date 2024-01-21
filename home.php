<?php
require 'session-common.php';
include 'check-if-added.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
          <link rel=stylesheet type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
      
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
    </head>
    <body>
         <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                        </div>
                        <div class="collapse navbar-collapse" id="mynavbar">
                           <ul class="nav navbar-nav navbar-right nav1">
                                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a> </li>  
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings </a></li>
                                 <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>                           
                            </ul>
                        </div>
                    </div>
                </nav>
            </div> 
        </div>
        <br><br><br><br>
        
     <div class="container-fluid aligne">
                <div class="col-md-4 col-sm-12"> 
                     <div class="thumbnail">                                        
                         <img src="images/samsung.jpeg" class="img-responsive">
                      <br>   <h4><em>SAMSUNG - M31 (5.7inch Display, 3GB Ram,32GB STORAGE Expandable upto 128GB, Snapdragon-636 Processor,15MP camera) at <u>Rs11,000.</u></em> </h4>
                        <?php    if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
                     </div>
                </div>
               <div class="col-md-4 col-sm-12"> 
                         <div class="thumbnail">                     
                        <img src="images/nokia.jpg" class="img-responsive">
                        <br>    <h4><em>NOKIA - 206 (2.5 inch Display,0.5GB Ram,0.5GB Storage Expandable upto 32GB,one-core Processor,2MP camera) at <u>Rs2500.</u></em> </h4>
               <?php    if (check_if_added_to_cart(2)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
  </div> 
                         </div>
                <div class="col-md-4 col-sm-12">
                         <div class="thumbnail">                    
                        <img src="images/realme.jpg" class="img-responsive">
                        <br>   <h4><em>REALME - 6PRO (6inch Display,4GB Ram,64GB Storage Expandable upto 128GB,Snapdragon-636 Processor,15MP camera) at <u>Rs12,000.</u></em> </h4>
                             <?php
                          if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
                    </div>
                    </div>
            </div>
              <div class="container-fluid aligne">
                <div class="col-md-4 col-sm-12"> 
                     <div class="thumbnail">                                        
                         <img src="images/triple1.jpg" class="img-responsive"><br>
                         <h4><em>APPLE IPHONE 10 (5.5inch Display,8GB Ram,256GB storage,HD camera) series starting at <u> Rs65,000.</u></em></h4>
                        <br>
                       <?php
                          if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
                </div> 
                         </div>
                 <div class="col-md-4 col-sm-12"> 
                         <div class="thumbnail">                     
                             <img src="images/nokia-216.jpeg" class="img-responsive">
                        <br>    <h4><em>NOKIA - 210 (2.5inch Display,1GB Ram,1 GB storage,one-core Processor,5MP camera) at <u>Rs4000.</u></em> </h4>
                        <br>      <?php
                          if (check_if_added_to_cart(5)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
  </div> 
                         </div>
                <div class="col-md-4 col-sm-12">
                         <div class="thumbnail">                    
                             <img src="images/Onep.jpg" class="img-responsive">
                        <br>   <h4><em>ONE PLUS - 7T (6.3inch Display,6GB Ram,128GB Storage, Snapdragon-675 Processor) at <u>Rs36,000.</u></em> </h4>
                        <br>       <?php
                          if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                <?php } ?>
                    </div>
                    </div>
            </div>
           <footer>
                <div class="container-fluid">
                    <div class="row">
                <div class="foot">
                     <div class="visible-sm visible-xs">
                       <div class="row">
                        <div class="col-xs-5">  <h3> Information</h3></div>
                        <div class="col-xs-6 col-xs-offset-1">    <h3> My Account</h3> </div>                        
                    </div>
                <div class="row">
                    <div class="col-xs-5 col-xs-offset-1">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-xs-5 col-xs-offset-1">   <h4><a href='cart.php'>Cart</h4></a></div>       
                       
                    </div>
                    <div class="row">
                          <div class="col-xs-5 col-xs-offset-1">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-5 col-xs-offset-1">   <h4><a href='settings.php'>Settings</h4></a></div>       
                    </div> 
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3 center">  <h3> Contact Us</h3></div>
                           
                    </div>
                        <div class="row">
                            <div class="col-xs-6 col-xs-offset-3 center">  <h4>Dial <span class="glyphicon glyphicon-earphone"></span> +91 123 0000000</h4></div>
                        </div>
                    </div>
                    <div class="visible-md visible-lg">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">  <h3> Information</h3></div>
                        <div class="col-md-4 col-sm-6">    <h3> My Account</h3> </div>                        
                        <div class="col-md-4 col-sm-6">  <h3> Contact Us</h3></div>                
                    </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">  <h4><a href='about.php'>About Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='cart.php'>Cart</h4></a></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='settings.php'>Settings</h4></a></div>     
                    </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12 text-center namee"><br>
                            <h3><strong>Designed and created by Gaurav with <span style="color: red">❤</span></strong></h3>
                             </div>
                         </div>
                </div>
                </div>
                </div>
            </footer>
        <script type=text/javascript src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script type=text/javascript src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>
