<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("location: login2.php");
  }

?>
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
    <link rel="stylesheet" href="../Mini-Project/style.css" />
  </head>
  <body> 
    <section id="header">
      <a href="#"><img src="img/logo2.png" style="height:20px; display: inline; width: 20px;" class="logo" /></a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="../Mini-Project/index.php">Home</a></li>
          <li><a href="../Mini-Project/shop.php">Shop</a></li>
          <li><a href="../Mini-Project/blog.php">Blog</a></li>
          <li><a href="../Mini-Project/about.php">About</a></li>
          <li><a href="../Mini-Project/contact.php">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
          </li>
          <li ><a href="../Mini-Project/login2.php"class="loginbtn">Login</a></li>
          <li ><a href="../Mini-Project/signup1.php"class="loginbtn">Signup</a></li>
          <a href="#" id="close"><i  class="far fa-times"></i></a>
        </ul>
      </div> 
      <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>
    <section id="hero">
      <div class="hero-titles">

        <h4>Trade-in-offer</h4>
        <h2>Super Value Deals</h2>
        <h1>On All Products</h1>
        <button><a href="/shop.php">Shop Now</a></button>
      </div>
    </section>
    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="../Mini-Project/img/features/f1.png" alt="" />
        <h6>Free Shipping</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f2.png" alt="" />
        <h6>Fast Delivery</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f4.png" alt="" />
        <h6>Great Rewards</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f5.png" alt="" />
        <h6>Happy Customers</h6>
      </div>
      <div class="fe-box">
        <img src="img/features/f6.png" alt="" />
        <h6>F24/7 Support</h6>
      </div>
    </section>
    <section id="product1" class="section-p1">
      <h2>Featured Products</h2>
      <p>Summer Collection New Morden Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="../Mini-Project/img/products/f1.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹178</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f2.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Flower Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹178</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f3.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Printed Party T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹85</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f4.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Casual White Shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹100</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f5.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Navy Party-wear</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹64</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f6.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Trendy Jacket</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹70</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f7.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Pant</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹50</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/f8.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Casual wear</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹74</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    </section>
    <section id="banner" class="section-m1">
      <h4>Trendy Always</h4>
      <h2>Up to <span>70% off</span> -All t-Shirts & Accessories</h2>
      <button class="normal">Explore More</button>
    </section>
    <section id="product1" class="section-p1">
      <h2>New Arrivals</h2>
      <p>Summer Collection New Morden Design</p>
      <div class="pro-container">
        <div class="pro">
          <img src="../Mini-Project/img/products/n1.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Navy Blue Casual Shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹178</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n2.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Casual Shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹178</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n3.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>White Formal Shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹85</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n4.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Printed Party-Wear</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹100</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n5.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Denim Jacket</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹64</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n6.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Shorts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹70</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n7.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Formal Shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹50</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro">
          <img src="../Mini-Project/img/products/n8.jpg" alt="" />
          <div class="des">
            <span>Adidas</span>
            <h5>Casual wear Black</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>₹74</h4>
          </div>
          <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
        </div>
      </div>
    </section>
    <section id="sm-banner" class="section-p1">
      <div class="banner-box">
        <h4>Crazy Deals</h4>
        <h2>Buy 1 Get 1 Free</h2>
        <span>The best classic dress is on sale at crazy discount</span>
        <button class="white"><a href="/shop.php" style="text-decoration: none;">Learn More</a></button>
      </div>
      <div class="banner-box banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming Season</h2>
        <span>The best classic dress is on sale at crazy discount</span>
        <button class="white"><a href="/shop.php"style="text-decoration: none;">Collection</a></button>
      </div>
    </section>
    <section id="banner3">
      <div class="banner-box">
        <h2>SEASON SALE</h2>
        <h3>Winter Collection -50% off</h3>
      </div>
      <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/Summer 2023</h3>
      </div>
      <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
      </div>
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
