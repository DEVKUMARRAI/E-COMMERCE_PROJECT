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
          <li><a href="contact.php">Contact</a></li>
          <li id="lg-bag">
            <a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a>
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
      <h2>#cart</h2>
      <p>Apply Coupon To Save Upto 90%!</p>
    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-shirts</td>
                    <td>₹118</td>
                    <td><input type="number" value="1"></td>
                    <td>₹118</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-shirts</td>
                    <td>₹118</td>
                    <td><input type="number" value="1"></td>
                    <td>₹118</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                    <td><img src="img/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-shirts</td>
                    <td>₹118</td>
                    <td><input type="number" value="1"></td>
                    <td>₹118</td>
                </tr>
            </tbody>
        </table>
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
