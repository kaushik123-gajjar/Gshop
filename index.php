<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gshop - Daily Use Products</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
<div class="logo-icon">
<p>Gshop</p>
</div>
<div class="navbar">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="userprofile.php">Profile</a></li>
</ul>
</div>
</header>
<?php  
if(isset($_GET["msg"])){
$msg=$_GET["msg"];
echo "<p style=color:green;text-align:center;>".htmlspecialchars($msg)."</p>";
} 
?>
<section class="products-section">
<h2>Daily Use Products</h2>
<div class="products-container">
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/toothpaste.png" alt="Toothpaste">
<h3>Toothpaste</h3>
<p>Price: ₹50</p>
<input type="hidden" name="name" value="Toothpaste">
<input type="hidden" name="price" value="50">
<input type="hidden" name="image" value="images/toothpaste.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/shampoo.png" alt="Shampoo">
<h3>Shampoo</h3>
<p>Price: ₹120</p>
<input type="hidden" name="name" value="Shampoo">
<input type="hidden" name="price" value="120">
<input type="hidden" name="image" value="images/shampoo.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/detergent.png" alt="Detergent Powder">
<h3>Detergent Powder</h3>
<p>Price: ₹90</p>
<input type="hidden" name="name" value="Detergent Powder">
<input type="hidden" name="price" value="90">
<input type="hidden" name="image" value="images/detergent.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/Face wash.png" alt="Face Wash">
<h3>Face Wash</h3>
<p>Price: ₹150</p>
<input type="hidden" name="name" value="Face Wash">
<input type="hidden" name="price" value="150">
<input type="hidden" name="image" value="images/facewash.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/shirt.png" alt="Men's Shirt">
<h3>Men's Shirt</h3>
<p>Price: ₹499</p>
<input type="hidden" name="name" value="Men's Shirt">
<input type="hidden" name="price" value="499">
<input type="hidden" name="image" value="images/shirt.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/shoes.png" alt="Running Shoes">
<h3>Running Shoes</h3>
<p>Price: ₹999</p>
<input type="hidden" name="name" value="Running Shoes">
<input type="hidden" name="price" value="999">
<input type="hidden" name="image" value="images/shoes.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/socks.png" alt="Pair of Socks">
<h3>Pair of Socks</h3>
<p>Price: ₹80</p>
<input type="hidden" name="name" value="Socks">
<input type="hidden" name="price" value="80">
<input type="hidden" name="image" value="images/socks.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/pants.png" alt="Casual Pants">
<h3>Casual Pants</h3>
<p>Price: ₹699</p>
<input type="hidden" name="name" value="Casual Pants">
<input type="hidden" name="price" value="699">
<input type="hidden" name="image" value="images/pants.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
<form action="addcart.php" method="post">
<div class="product-card">
<img src="images/cap.png" alt="Baseball Cap">
<h3>Baseball Cap</h3>
<p>Price: ₹199</p>
<input type="hidden" name="name" value="Baseball Cap">
<input type="hidden" name="price" value="199">
<input type="hidden" name="image" value="images/cap.png">
<label>Qty: <input type="number" name="qty" value="1" min="1"></label>
<button type="submit" name="add_to_cart">Add to Cart</button>
</div>
</form>
</div>
</section>
<footer class="footer">
<div class="footer-top">
<div class="footer-column">
<h4>Get to Know Us</h4>
<ul>
<li><a href="#">About Gshop</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Press Releases</a></li>
<li><a href="#">Our Services</a></li>
</ul>
</div>
<div class="footer-column">
<h4>Connect with Us</h4>
<ul>
<li><a href="https://www.facebook.com/">Facebook</a></li>
<li><a href="https://www.twitter.com/">Twitter</a></li>
<li><a href="https://www.instagram.com/">Instagram</a></li>
</ul>
</div>
<div class="footer-column">
<h4>Make Money with Us</h4>
<ul>
<li><a href="#">Sell on Gshop</a></li>
<li><a href="#">Advertise Your Products</a></li>
<li><a href="#">Become an Affiliate</a></li>
<li><a href="#">Delivery Partner</a></li>
</ul>
</div>
<div class="footer-column">
<h4>Let Us Help You</h4>
<ul>
<li><a href="userprofile.php">Your Account</a></li>
<li><a href="#">Returns Centre</a></li>
<li><a href="#">Help</a></li>
<li><a href="#">Customer Service</a></li>
</ul>
</div>
</div>
<div class="footer-bottom">
<p>© 2025 Gshop. All Rights Reserved.</p>
</div>
</footer>

</body>
</html>