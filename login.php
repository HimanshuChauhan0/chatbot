<?php
    require 'connection.php';
    session_start();
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
            <br><br><br>
           <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3>LOGIN</h3>
                            </div>
                            <div class="panel-body">
                                <p>Login to make a purchase.</p>
                                <form method="post" action="login_submit.php">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">Don't have an account yet? <a href="signup.php">Register</a></div>
                        </div>
                    </div>
                </div>
           </div>
           <br><br><br><br><br>
           <!--------------footer------>
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
