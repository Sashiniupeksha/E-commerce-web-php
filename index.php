<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> E-Commerce website</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<bod>
    <?php include 'db_connect.php'; ?>
    <header>
        <nav>
        <div class="logo">
        <img src="images/logo.png" alt="Logo"></div>

        
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>

            <div class="search-bar">
                <input type="text" placeholder="search for products">
                <button type="submit">Search</button>
            </div>
        </nav>
    
    </header>
<!--hero section -->


    <section class="hero">
  <div class="hero-content">
    <h1>Welcome to SnapShop</h1>
    <p>Discover the best deals on your favorite products. Shop now and enjoy exclusive discounts!</p>
    <!--PHP Button for inserting data into MYSQL-->
    <form action="shop_button_handler.php" method="POST">
    <button type="submit" name="shopNow" class="btn-primary">SHOP NOW</button>
    </form>
    
  </div>
  <div class="hero-image">
    <img src="images/hero-m.png" alt="Featured Products">
  </div>
</section>
<!-- feathures product category-->

<section class="featured-products">
  <div class="container">
    <h2>Featured Products</h2>
    <div class="products">
      <div class="product">
        <img src="images/frock-1.png" alt="Product 1">
        <h3>frocks</h3>
        <p>RS.250</p>
        <a href="#product1-details" class="btn-primary">View Details</a>
      </div>
      <div class="product">
        <img src="images/saree-1.png" alt="Product 2">
        <h3>sarees</h3>
        <p>Rs.800</p>
        <a href="#product2-details" class="btn-primary">View Details</a>
      </div>
      <div class="product">
        <img src="images/J-2.png" alt="Product 3">
        <h3>Jewellers</h3>
        <p>RS.1000</p>
        <a href="#product3-details" class="btn-primary">View Details</a>
      </div>
      <div class="product">
        <img src="images/shose-1.png" alt="Product 4">
        <h3>Shoes</h3>
        <p>RS.500</p>
        <a href="#product4-details" class="btn-primary">View Details</a>
      </div>
      <div class="product">
        <img src="images/choco-3.png" alt="Product 4">
        <h3>Chocolate</h3>
        <p>RS.100</p>
        <a href="#product4-details" class="btn-primary">View Details</a>
      </div>
      <div class="product">
        <img src="images/burger.png" alt="Product 4">
        <h3>Foods</h3>
        <p>RS.150</p>
        <a href="#product4-details" class="btn-primary">View Details</a>
      </div>
      
    </div>
  </div>
</section>


            

          

<!--footer section-->
<footer>
    <div class="footer-container">
        <!-- About Us Section -->
        <div class="footer-section about-us">
            <h3>About Us</h3>
            <p>We are a leading e-commerce platform offering high-quality products to our customers worldwide. Our mission is to provide the best shopping experience with a wide selection of products.</p>
        </div>

        <!-- Contact Us Section -->
        <div class="footer-section contact-us">
            <h3>Contact Us</h3>
            <p>Email: <a href="mailto:support@cutestore.com">support@cutestore.com</a></p>
            <p>Phone: <a href="tel:+123456789">+123 456 789</a></p>
            <p>Address: 123 Main Street, City, Country</p>
        </div>

        <!-- Privacy Policy Section -->
        <div class="footer-section privacy-policy">
            <h3>Privacy Policy</h3>
            <p><a href="privacy-policy.html">Read our Privacy Policy</a></p>
        </div>

        <!-- Social Media Section -->
        <div class="footer-section social-media">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
                <li><a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2024 Cute Store. All rights reserved.</p>
    </div>
</footer>



    
    <script>
        <script src="script.js">
    </script>
</body>
</html>
