<!DOCTYPE html>
<head>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cart </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
    <nav>
        <div class="logo">
        <img src="images/logo.png" alt="Logo">

<ul class="nav">
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

    <!-- Cart Page Section -->
    <section class="cart-page">
        <div class="container">
            <h2>Your Cart</h2>

            <!-- Cart Table -->
<table class="cart-table">
                <thead>
                    <tr>
<th>Product</th>
                        <th>Price</th>
<th>Quantity</th>
                        <th>Total</th>
<th>Delete</th>
                    </tr>
                </thead>
<tbody> 
                    <tr> 
                        <td>
<img src="images/shose-2.png" alt="Product 1">
                            <span>shose
</td>
                        <td>RS:500
<td>
                            <input type="number" value="1" min="1" class="product-quantity">
</td>
                        <td class="product-total">RS:500
<td><button class="remove-btn">Remove</button></td>
                    </tr>
                    <tr>
<td>
                            <img src="images/submarin.png" alt="Product 2">
<span>Foods</span>
                        </td>
<td>RS:150</td>
                        <td>
<input type="number" value="1" min="1" class="product-quantity">
                        </td>
<td class="product-total">RS:150</td>
                        <td><button class="remove-btn">Remove</button></td>
</tr>
                    <!-- More products can be added similarly -->
                </tbody>
</table>

            <!-- Cart Summary -->
            <div class="cart-summary">
                <div class="subtotal">
<p>Subtotal: <span>RS:650</span></p>
                </div>
                <div class="checkout">
<a href="checkout.html" class="btn-primary">Proceed to Checkout</a>
                </div>
            </div>

<!-- Empty Cart Message -->
            <div class="empty-cart-message" style="display:none;">
                <p>Your cart is empty. Start shopping now!
<a href="shop.html" class="btn-primary">Go to Shop</a>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
    <div class="footer-container">
<!-- About Us Section -->
        <div class="footer-section about-us">
            <h3>About Us</h3>
            <p>Welcome to Snapshop! We are committed to providing quality products and services that meet your needs. Our aim is to serve with excellence
</div>

        <!-- Contact Us Section -->
        <div class="footer-section contact-us">
            <h3>Contact Us</h3>
            <p>Email: <a href="mailto:support@cutestore.com">snapshop@gmail.com</a></p>
<p>Phone: <a href="tel:+123456789">077 985 7542</a></p>
            <p>kohuwal,colombo</p>
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
