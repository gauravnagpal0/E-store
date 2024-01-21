<?php
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
    <title>Forgot Password</title>
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
            </div><br><br><br><br><br>
            <div class="container-fluid">
                <div class="row">
                      <div class="col-xs-4 col-md-6 col-md-offset-3 visible-lg visible-md">
                    <div class="panel panel-primary">                                       
                        <div class="panel-heading">
                            <h3>Enter the registered email to continue</h3>
                        </div>     
                        <div class="panel-body">                        
                    <div class="form-group">                 
                        <form method="post" action="forgot_submit.php">
                <br>  <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            </form>
                </div>
                </div>
                        </div>
          </div>
                                <div class="col-sm-6 col-md-6 visible-sm">
                    <div class="panel panel-primary">                                       
                        <div class="panel-heading">
                            <h3>Enter the registered email to continue</h3>
                        </div>     
                        <div class="panel-body">                        
                    <div class="form-group">                 
                        <form method="post" action="forgot_submit.php">
                <br>  <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            </form>
                </div>
                </div>
                        </div>
          </div>
                                <div class="col-sm-6 col-md-6 visible-xs">
                    <div class="panel panel-primary">                                       
                        <div class="panel-heading">
                            <h3>Enter the registered email to continue</h3>
                        </div>     
                        <div class="panel-body">                        
                    <div class="form-group">                 
                        <form method="post" action="forgot_submit.php">
                <br>  <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
                <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
            </form>
                </div>
                </div>
                        </div>
          </div>
    </div>
            </div><br><br><br>
            <div class="visible-lg visible-md">
            <br><br><br><br><br><br><br><br>
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
