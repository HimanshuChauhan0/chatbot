<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
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
            
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1>Change Password</h1>
                        <form method="post" action="setting_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Change">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br><br>
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
