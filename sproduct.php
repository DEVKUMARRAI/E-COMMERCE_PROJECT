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
    <link rel="stylesheet" href="../Mini-Project/style.css" />
  </head>
  <body>
    <section id="header">
    <a href="#"><img src="img/logo2.png" style="height:20px; display: inline; width: 20px;" class="logo" /></a>
      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="shop.php">Shop</a></li>
          <li><a href="blog.php">Blog</a></li>
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
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="../Mini-Project/img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Mini-Project/img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Mini-Project/img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="../Mini-Project/img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home/T-Shirt</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>₹130</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
                
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>
                T-shirts have become one of the most common yet stylish choices of clothing for teenagers. As tees are simple to wear, comfortable, and easy to wash, they have become a popular option. You can pair a tee with pants, like chinos, track pants, joggers, jeans, shorts, etc. Wearing appropriate accessories with a half sleeve tee will certainly amp up your style factor. Pick a polo tee with striped details and stylise with a leather strap watch for the best results. You can even find polo tees with solid colours or prints online. 
            </span>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
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
              <h4>$100</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
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

    <script>
        const MainImg=document.getElementById('MainImg');
        const smallimg=document.getElementsByClassName("small-img");
        smallimg[0].onclick=()=>{
            MainImg.src=smallimg[0].src;
        }
        smallimg[1].onclick=()=>{
            MainImg.src=smallimg[1].src;
        }
        smallimg[2].onclick=()=>{
            MainImg.src=smallimg[2].src;
        }
        smallimg[3].onclick=()=>{
            MainImg.src=smallimg[3].src;
        }
       Hello 
    </script>
    <script src="./script.js"></script>
  </body>
</html>
