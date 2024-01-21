<?php
require 'session-common.php';
?>
<!DOCTYPE html>
<html>
    <head>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
              <link rel=stylesheet type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>About Us</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['email'])){ ?>
        <div class="alig">
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
      </div><br><br>
    
      <br><br><br><br><br><br><br><br>
    
    </div>
  </div>
</div>
                        <li><a href="about.php"><span class="glyphicon glyphicon-calendar"></span> About Us</a></li>
                           <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
                        </ul>
                    </div>
                  </nav>
                 </div>
            </div><?php 
        }  else{ ?>  <div class="container-fluid">
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
        <?php } ?> <br><br><br><br>
                <div class="container-fluid">
                     <div class="col-md-4 col-sm-6">
                         <div class="panel">
                             <div class="panel-heading">
                                 <h3><strong>WHO WE ARE</strong></h3>
                             </div>
                             <div class="panel-body">
                                 <img src="images/about.jpg" class="img-responsive" width="=80px" height="120px"><br>
                                 <p>E- store is an American electronic commerce company with headquarters in Washington.It is the largest internet-based retailer in the United States.E- store started as an online blog, but soon diversified, selling mobile phones.E- Store also sells certain low-end products like USB cabels and other accessories. E- Store has separate retail websites for United States, United Kingdom, Ireland, France , Canada, Germany, Italy, Spain, the Netherlands,Australia, Brazil, Japan, China, India, and Mexico. E- Store also offers international shipping to certain other countries.</p>
                             </div>
                         </div>
                     </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3><strong>OUR HISTORY</strong></h3>
                            </div>
                            <div class="panel-body">
                                <h4 id="alpha">1998-</h4>
                                <p>The company was founded in 1998,spurrred by what Velos called his "Initiating framework", which described his efforts as an initiate to participate in the internet bussiness boom during that time. In 1998,Velos left his employment as president of Ofcol & o. and moved to Seattle. He began to work on a bussiness plan for what would eventually become E- Store.</p>
                             
                                <h4 id="alpha">2008-</h4>
                                <p>In July 2008,the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-Us Venture Partners.</p>
                                <h4 id="alpha">2015-</h4>
                                <p>E- Store received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors, including Kalaari Capital, Venture Partners and Indo-Us Venture Partners.</p>
                            </div>
                        </div>
                    </div>   
                    <div class="col-md-4 col-sm-6">
                         <div class="panel">
                            <div class="panel-heading">
                                <h3><strong>  Opportunities</strong></h3>
                            </div>
                             <div class="panel-body">
                                 <h4 id="alpha">Available Roles</h4>
                                 <p>1. Jr/Sr Web developer [Full Time Role + also available as a 6 Months Internship].</p>
                                 <p>2. Bussiness Apprentice [6 Months Internship]</p>
                                 <p>3. Manager at backend operations [Full Time Role + also available as a 6 Months Internship].</p>                                     
                             </div>
                         </div>
                    </div>
                </div>
        <?php
        if(!isset($_SESSION['email'])){ ?>
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
                            <h3><strong>Designed and created by GAurav with <span style="color: red">❤</span></strong></h3>
                             </div>
                         </div>
                </div>
                </div>
                </div>
            </footer>
        <?php } else { ?>
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
                            <h3><strong>Designed and created by <a href="https://github.com/Ishantkhurana" target="_blank">Ishant Khurana</a> with <span style="color: red">❤</span></strong></h3>
                             </div>
                         </div>
                </div>
                </div>
                </div>
            </footer>
        
        <?php } ?>
         </div>
          <script type=text/javascript src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script type=text/javascript src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>  
    </body>
</html>
