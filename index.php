<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Happy Store</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <div class="header">
    <div class="container">
<div class="navbar">
<div class="logo">
    <img src="images/logo.png"  width="125px">
</div>
<nav>
    <ul id="MenuItems">
<li><a href="index.php">Home</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="">About</a></li>
<!---<li><a href="">Contact</a></li> --->
<!---<li><a href="login.php">Account</a></li>-->
<?php
                           if(isset($_SESSION['email'])){
                           ?>

<!--<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>--->
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
</ul>
</nav>
<a href="cart.php"> <img src="images/cart.png" width="30px" height="30px"> </a>

</div>
</div>
<div class="row">
<div class="col-2">
<h1>
    Give Your Workout<br> A New Style!</h1>
    <p> Success isn't always about greatness. It's about consistency.Consistent<br> hard work gains succes.Greatness will come.</p>
<a href="" class="btn">Explore Now &#8594; </a>
</div>
<di v class="col-2">
  <img src="images/image1.png">  
</div>
</div>
</div>
<div class="categories">
    <div class="small-container">
<div class="row">
<div class="col-3">
    <img src="images/category-1.jpg"></div>
<div class="col-3">
    <img src="images/category-2.jpg"></div>
<div class="col-3">
    <img src="images/category-3.jpg"></div>
    </div>
</div>
    </div>
    <div class="small-container">
<h2 class="title">Featured Products</h2>
<div class="row">
<div class="col-4">
    <img src="images/product-1.jpg">
    <h4>Red Printed T-Shirt</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-half-o"></i>   
    </div>
    <p>500.00Rs</p>

</div>

<div class="col-4">
    <img src="images/product-2.jpg">
    <h4>HRX by Hrithik Roshan black shose</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>   
    </div>
    <p>2500.00Rs</p>

</div>
<div class="col-4">
    <img src="images/product-3.jpg">
    <h4>Gray Trackpant </h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>   
    </div>
    <p>799.00Rs</p>

</div>
<div class="col-4">
    <img src="images/product-4.jpg">
    <h4>Polo T-Shirt by Puma</h4>
    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>   
    </div>
    <p>1599.00Rs</p>

</div>
</div>
<h2 class="title">Latest Products</h2>
<div class="row">
    <div class="col-4">
        <img src="images/product-5.jpg">
        <h4>Red Printed T-Shirt</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>   
        </div>
        <p>500.00Rs</p>
    
    </div>
    
    <div class="col-4">
        <img src="images/product-6.jpg">
        <h4>HRX by Hrithik Roshan black shose</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>   
        </div>
        <p>2500.00Rs</p>
    
    </div>
    <div class="col-4">
        <img src="images/product-7.jpg">
        <h4>Gray Trackpant </h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>   
        </div>
        <p>799.00Rs</p>
    
    </div>
    <div class="col-4">
        <img src="images/product-8.jpg">
        <h4>Polo T-Shirt by Puma</h4>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>   
        </div>
        <p>1599.00Rs</p>
    
    </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="images/product-9.jpg">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>   
            </div>
            <p>500.00Rs</p>
        
        </div>
        
        <div class="col-4">
            <img src="images/product-10.jpg">
            <h4>HRX by Hrithik Roshan black shose</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>   
            </div>
            <p>2500.00Rs</p>
        
        </div>
        <div class="col-4">
            <img src="images/product-11.jpg">
            <h4>Gray Trackpant </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>   
            </div>
            <p>799.00Rs</p>
        
        </div>
        <div class="col-4">
            <img src="images/product-12.jpg">
            <h4>Polo T-Shirt by Puma</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>   
            </div>
            <p>1599.00Rs</p>
        
        </div>
       
    </div>
    </div>
<!-------offer section-->
<div class="offer">
<div class="small-container"></div>
<div class="row">
    <div class="col-2">
    <img src="images/exclusive.png" class="offer-img">
</div>
<div class="col-2">
    <p>Exclusively Avaiable</p>
    <h1>Smart band</h1>
<small>Statistics exercise steps and calculate the calorie consumption, can monitor the heart rate, blood pressure, blood oxygen concentration, sleep quality, and can be used as a stopwatch.</small>
<a href= "" class="btn" >Buy Now &#8594;</a>
</div>
</div>
</div>
</div>
<!--------- testimonial---->
      <div class="testimonial">
         <div class="small-container">
             <div class="row">
                <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of  the printing and typesetting
                industry. Learn Ipsum has been the industry's standard dummy
                text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-1.png">
                       <h3>Sean Parker</h3>
                 </div>
                 <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of  the printing and typesetting
                industry. Learn Ipsum has been the industry's standard dummy
                text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-2.png">
                       <h3>Sean Parker</h3>
                 </div>
                 <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Lorem Ipsum is simply dummy text of  the printing and typesetting
                industry. Learn Ipsum has been the industry's standard dummy
                text ever</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-3.png">
                       <h3>Sean Parker</h3>
                 </div>
           </div>
      </div>
</div>
<!--------------brands------>
              <div class="brands">
                 <div class="small-container">
                    <div class="row">
                       <div class="col-5">
                           <img src="images/logo-godrej.png">
                       </div>
                       <div class="col-5">
                           <img src="images/logo-oppo.png">
                       </div>
                       <div class="col-5">
                           <img src="images/logo-coca-cola.png">
                       </div>
                       <div class="col-5">
                           <img src="images/logo-paypal.png">
                       </div>
                       <div class="col-5">
                           <img src="images/logo-philips.png">
                       </div>
                   </div>
              </div>
          </div>


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
                   <p class="copyright">ADIT IBM Bengaluru<br>2021</br></p>
              </div>
          </div>
</body>
</html>

