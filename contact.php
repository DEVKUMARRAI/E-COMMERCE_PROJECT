<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Commerce Website</title>
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
          <li><a href="blog.php">Blog</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
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
    <section id="page-header" class="about-header">
      <h2>#let's_talk</h2>
      <p>LEAVE A MESSAGE,We love to hear from you!</p>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Gla University,Mathura</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>devrai197551@gmail.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>8528885508</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Friday 10AM to 4PM</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1998.6579939683727!2d77.59475036975441!3d27.60644814748139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736ce47bffc039%3A0xfe5fc3da92c6341!2sGLA%20University!5e0!3m2!1sen!2sin!4v1669152890211!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <section id="form-details"></section>
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
