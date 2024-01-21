<?php
require 'session-common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
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
    
        <title>E- Store</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                     <nav class="navbar navbar-default navbar-fixed navbar-top">
                           <div class="container-fluid"> 
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand hed"><strong>E- Store</streong></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false">
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav navbar-right nav1">
                            <li><a href="signup.php"><span class=" glyphicon glyphicon-user"></span> Sign Up</a>
                            <li><button type="button" class="btn ln" data-toggle="modal" data-target="#Modal"><span class="glyphicon glyphicon-log-in"></span><strong> Login</strong>
</button>
<div class="modal fade" id="Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title inli" id="Modal">Login</h3> 
        <button type="button" class="close inli" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
        </button>
       
      </div>
      <div class="modal-body">
          <div class="form-group">
              <div class="col-md-9 col-sm-3">
          <form action="login_submit.php" method="post">
              <div>Don't have an account?<a href="signup.php">Register</a><br></div><br>
              <input type="email" placeholder="Email" required="true" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
              <br>   <input type="password" placeholder="Password" required="true" name="password" class="form-control" minlength="6" >
              <br><button class="btn btn-primary" value="Login">Login</button>
              <br><br>   <a href="forgot-pwd.php" > Forgot Password? </a>
          </form>
              </div>
          </div>
      </div><br><br><br><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
                        <li><a href="about.php"><span class="glyphicon glyphicon-calendar"></span> About Us</a></li>
                           <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        </ul>
                    </div>
                  </nav>
                 </div>
            </div>
            <div class="container-fluid aligne">
                <div class="col-md-4 col-sm-12"> 
                     <div class="thumbnail">                                        
                         <img src="images/samsung.jpeg" class="img-responsive">
                      <br>   <h4><em>SAMSUNG - M31 (5.7inch Display, 3GB Ram,32GB STORAGE Expandable upto 128GB, Snapdragon-636 Processor,15MP camera) at <u>Rs11,000.</u></em> </h4><br>
                        <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
                </div> 
                         </div>
                 <div class="col-md-4 col-sm-12"> 
                         <div class="thumbnail">                     
                        <img src="images/nokia.jpg" class="img-responsive">
                      <br>    <h4><em>NOKIA - 206 (2.5 inch Display,0.5GB Ram,0.5GB Storage Expandable upto 32GB,one-core Processor,2MP camera) at <u>Rs2500.</u></em> </h4>
                        <br>       <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
  </div> 
                         </div>
                <div class="col-md-4 col-sm-12">
                         <div class="thumbnail">                    
                        <img src="images/realme.jpg" class="img-responsive">
                       <br>   <h4><em>REALME - 6PRO (6inch Display,4GB Ram,64GB Storage Expandable upto 128GB,Snapdragon-636 Processor,15MP camera) at <u>Rs12,000.</u></em> </h4>
                        <br>       <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
                    </div>
                    </div>
            </div>
              <div class="container-fluid aligne">
                <div class="col-md-4 col-sm-12"> 
                     <div class="thumbnail">                                        
                         <img src="images/triple1.jpg" class="img-responsive"><br>
                        <h4><em>APPLE IPHONE 10 (5.5inch Display,8GB Ram,256GB storage,HD camera) series starting at <u> Rs65,000.</u></em></h4>
                        <br>
                        <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
                </div> 
                         </div>
                 <div class="col-md-4 col-sm-12"> 
                         <div class="thumbnail">                     
                             <img src="images/nokia-216.jpeg" class="img-responsive">
                     <br>    <h4><em>NOKIA - 210 (2.5inch Display,1GB Ram,1 GB storage,one-core Processor,5MP camera) at <u>Rs4000.</u></em> </h4>
                        <br>       <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
  </div> 
                         </div>
                <div class="col-md-4 col-sm-12">
                         <div class="thumbnail">                    
                             <img src="images/Onep.jpg" class="img-responsive">
                       <br>   <h4><em>ONE PLUS - 7T (6.3inch Display,6GB Ram,128GB Storage, Snapdragon-675 Processor) at <u>Rs36,000.</u></em> </h4>
                        <br>       <a href="signup.php" class="btn btn-primary btn-block">Order Now</a>
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
                    <div class="col-xs-5 col-xs-offset-1">   <h4><button classs="btn" id="log" data-toggle="modal" data-target="#Modal" >Login</button></h4></div>                       
                       
                    </div>
                    <div class="row">
                          <div class="col-xs-5 col-xs-offset-1">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-xs-5 col-xs-offset-1">   <h4><a href='signup.php'>Signup</h4></a></div>     
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
                    <div class="col-md-4 col-sm-6">   <h4><button classs="btn" id="log" data-toggle="modal" data-target="#Modal" >Login</button></h4></div>                       
                        <div class="col-md-4 col-sm-6">  <h4>Contact +91 123 0000000</h4></div>
                    </div>
                    <div class="row">
                          <div class="col-md-4 col-sm-6">  <h4><a href='contact.php'>Contact Us</h4></a></div>
                    <div class="col-md-4 col-sm-6">   <h4><a href='signup.php'>Signup</h4></a></div>     
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
