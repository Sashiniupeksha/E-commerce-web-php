<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
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

    <!-- Shop Section -->
    <section class="shop">
        <div class="container">
            <!-- Sidebar Filters (optional) -->
            <aside class="shop-sidebar">
                <h3>Filter Products</h3>
                <form>
                    <label for="category">Category</label>
                    <select id="category" name="category">
                        <option value="all">All Categories</option>
                        <option value="electronics">Frocks</option>
                        <option value="clothing">Sarees</option>
                        <option value="accessories">Jewellers</option>
                        <option value="accessories">Shoes</option>
                        <option value="accessories">Chocolate</option>
                        <option value="accessories">Foods</option>
                    </select>

                    <label for="price-range">Price Range</label>
                    <input type="range" id="price-range" name="price-range" min="0" max="500" step="1">

                    <label for="rating">Rating</label>
                    <select id="rating" name="rating">
                        <option value="all">All Ratings</option>
                        <option value="5">5 Stars</option>
                        <option value="4">4 Stars & up</option>
                        <option value="3">3 Stars & up</option>
                    </select>

                    <button type="submit" class="btn-primary">Apply Filters</button>
                </form>
            </aside>

            <!-- Product Grid -->
            <div class="shop-products">
                <h2>Shop Our Products</h2>

                <!-- Sort Options -->
                <div class="sort-options">
                    <label for="sort">Sort by: </label>
                    <select id="sort" name="sort">
                        <option value="popular">Most Popular</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                    </select>
                </div>

                <!-- Product Listings -->
                <div class="products">
                    <div class="product">
                        <img src="images/frock-5.png" alt="Product 1">
                        <h3>frocks</h3>
                        <p>RS:800</p>
                        <a href="product-details.html" class="btn-primary">View Details</a>
                        <a href="cart.html" class="btn-secondary">Add to Cart</a>
                    </div>
                    <div class="product">
                        <img src="images/saree-2.png" alt="Product 2">
                        <h3>sarees</h3>
                        <p>RS:1500</p>
                        <a href="product-details.html" class="btn-primary">View Details</a>
                        <a href="cart.html" class="btn-secondary">Add to Cart</a>
                    </div>
                    <div class="product">
                        <img src="images/shose-3.png" alt="Product 3">
                        <h3>Shoes</h3>
                        <p>Rs:800</p>
                        <a href="product-details.html" class="btn-primary">View Details</a>
                        <a href="cart.html" class="btn-secondary">Add to Cart</a>
                    </div>
                    <!-- Additional Products... -->
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <a href="#">&laquo; Previous</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">Next &raquo;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
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
</body>
</html>
