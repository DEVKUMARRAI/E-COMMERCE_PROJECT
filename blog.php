<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <section id="header">
    <a href="#"><img src="img/logo2.png" style="height:20px; display: inline; width: 20px;" class="logo" /></a>
      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a class="active"href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>
    <section id="page-header" class="blog-header">
      <h2>#Read More</h2>
      <p>Read all case studies about our products! </p>
    </section>
    <section id="blog">
        <div class="blog-box">
            <div class="blog-img"><img src="img/blog/b1.jpg" alt=""></div>
            <div class="blog-details">
                <h4>The Cotton-Jeresy Zip-Up Hoodie</h4>
                <p>Super Comfertable,Trendy,Light and simply Awesome</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img"><img src="img/blog/b2.jpg" alt=""></div>
            <div class="blog-details">
                <h4>How To Style A Quiff</h4>
                <p>Super Comfertable,Trendy,Light and simply Awesome</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img"><img src="img/blog/b3.jpg" alt=""></div>
            <div class="blog-details">
                <h4>Must Have Clothes For this Winter</h4>
                <p>Super Comfertable,Trendy,Light and simply Awesome</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img"><img src="img/blog/b4.jpg" alt=""></div>
            <div class="blog-details">
                <h4>Runway-Inspired Trends</h4>
                <p>Super Comfertable,Trendy,Light and simply Awesome</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img"><img src="img/blog/b5.jpg" alt=""></div>
            <div class="blog-details">
                <h4>Most Trendy</h4>
                <p>Super Comfertable,Trendy,Light and simply Awesome</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>13/01</h1>
        </div>
    </section>
    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your Email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>
    <footer class="section-p1">
      <div class="col">
      <a href="#"><img src="img/logo2.png" style="height:20px; display: inline; width: 20px;" class="logo" /></a>
        <h4>Contact</h4>
        <p><strong>Address:</strong> Gla University Mathura,Uttarpradesh</p>
        <p><strong>Phone:</strong> 8528885508</p>
        <p><strong>Email:</strong> devrai197551@gmail.com</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" alt="" />
          <img src="img/pay/play.jpg" alt="" />
          <p>Secured Payment GateWays</p>
          <img src="img/pay/pay.png" alt="" />
        </div>
      </div>
      <div class="copyright">
        <p>@2022,Dev Kumar Rai-Ecommerce Template Gla university</p>
      </div>
    </footer>
    <script src="./script.js"></script>
  </body>
</html> 
