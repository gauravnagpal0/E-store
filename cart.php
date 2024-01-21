<?php
require 'session-common.php';
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
    <title>Cart</title>
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
        <br><br><br><br><br>
         <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con, $query)or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
        <div class="container">
            <div class="row">
                <table class="table table-bordered table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                            <th>Item Name</th>              
                            <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id = $row["id"] . ", ";
                                    echo "<tr><em><td>" . "#" . $row["id"] . " </td> <td>" . $row["Name"] . " </td> <td>Rs " . $row["Price"] . " </td> <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger'> Remove</a></td></em></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td><strong>Total</strong></td><td>Rs " . $sum . "</td><td><a href='success.php?id=" . $id . "' class='btn btn-info'> Confirm Order</a></td></tr>";
                        ?>
       
       
                            <?php
                        }    else { ?>
                            <div class="container">
                                <div class="row center">  
                                            <div class="col-sm-3 col-sm-6 col-md-offset-2 visible-xs">             
                            <div class="jumbotron">
                                <?php
                                echo "<h3>" . "Add items to the cart first !" . "<br><br>" . "<a href='home.php'><span class='glyphicon glyphicon-hand-right'></span> Click Here!" . "</a>" . " " . "to add items to the Cart." . "</h3>"; ?>
                            </div>
                                </div>
                                          <div class="col-sm-12 col-md-offset-2 visible-sm">             
                            <div class="jumbotron">
                                <?php
                                echo "<h3>" . "Add items to the cart first !" . "<br><br>" . "<a href='home.php'><span class='glyphicon glyphicon-hand-right'></span> Click Here!" . "</a>" . " " . "to add items to the Cart." . "</h3>"; ?>
                            </div>
                                </div>
                                    <div class="col-xs-3 col-md-8 col-md-offset-2 visible-lg visible-md">             
                            <div class="jumbotron">
                                <?php
                                echo "<h3>" . "Add items to the cart first !" . "<br><br>" . "<a href='home.php'><span class='glyphicon glyphicon-hand-right'></span> Click Here!" . "</a>" . " " . "to add items to the Cart." . "</h3>"; ?>
                            </div>
                                </div>
                            </div>
                            </div>
                   <?php     }
                        ?>
            </div>
        </div>
                    </table>
                </div>
        </div>
            </div>
            <div class="visible-lg visible-md">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
