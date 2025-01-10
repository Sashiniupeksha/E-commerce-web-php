<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile - Cute Store</title>
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

    <!-- Profile Page Section -->
    <section class="profile-page">
        <div class="container">
            <h2>Your Profile</h2>

            <!-- User Information -->
            <div class="profile-info">
                <h3>Personal Information</h3>
                <form action="update_profile.php" method="POST">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" value="John Doe" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="johndoe@example.com" required>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" value="123-456-7890" required>

                    <label for="address">Shipping Address:</label>
                    <textarea id="address" name="address" rows="4" required>123 Main St, Springfield, IL</textarea>

                    <button type="submit" class="btn-primary">Update Profile</button>
                </form>
            </div>

            <!-- Order History -->
            <div class="order-history">
                <h3>Order History</h3>
                <table class="order-history-table">
                    <thead>
                        <tr>
                            <th>Order Number</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>2024-01-05</td>
                            <td>Shipped</td>
                            <td>$49.99</td>
                            <td><a href="order-details.html?order=12345" class="btn-secondary">View Details</a></td>
                        </tr>
                        <tr>
                            <td>#12346</td>
                            <td>2024-01-03</td>
                            <td>Delivered</td>
                            <td>$29.99</td>
                            <td><a href="order-details.html?order=12346" class="btn-secondary">View Details</a></td>
                        </tr>
                        <!-- More orders can be listed here -->
                    </tbody>
                </table>
            </div>

            <!-- Account Settings -->
            <div class="account-settings">
                <h3>Account Settings</h3>
                <form action="update_password.php" method="POST">
                    <label for="current-password">Current Password:</label>
                    <input type="password" id="current-password" name="current-password" required>

                    <label for="new-password">New Password:</label>
                    <input type="password" id="new-password" name="new-password" required>

                    <label for="confirm-password">Confirm New Password:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>

                    <button type="submit" class="btn-primary">Update Password</button>
                </form>
            </div>

            <!-- Logout Option -->
            <div class="logout">
                <a href="logout.php" class="btn-secondary">Logout</a>
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
