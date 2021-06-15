<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <div class="header">
        <div>
            
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            </div> 
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                            </div>
                            <div class="form-group"> 
                                <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" placeholder="City" required="true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="footer-col-1">
                     <h3>Download Our App </h3>
                     <p>Download App For Android and ios mobile Phone.</p>
                     <div class="app-logo">
                         <img src="images/play-store.png">
                         <img src="images/app-store.png">
                     </div>
                     </div>
                     <div class="footer-col-2">
                     <img src="images/logo-white.png">
                     <p>Our Purpose is to Sustainably make the Pleasure and Benefits
                     of Sports Accessible to the many.</p>
                     </div>
                     <div class="footer-col-3">
                     <h3>Useful Links </h3>
                     <ul>
                         <li>Coupons</li>
                          <li>Big Post</li>
                           <li>Return Policy</li>
                            <li>Join Affiliate</li>
                     </ul>
                     </div>
                     <div class="footer-col-4">
                     <h3>Follow us</h3>
                     <ul>
                         <li>Faceboook</li>
                          <li>Twitter</li>
                           <li>Instagram</li>
                            <li>Youtube</li>
                     </ul>
                     </div>
                   </div>
                   <hr>
                   <p class="copyright">ADIT IBM Bangaluru</p>
              </div>
          </div>
</div>
</div>
        </div>
    </body>
</html>