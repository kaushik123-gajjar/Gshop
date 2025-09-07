<?php
session_start();
$connect = new mysqli("localhost", "root", "", "store");
$stmt = $connect->query("SELECT * FROM product");
$bill=0;
$qtY=0;
while ($row = $stmt->fetch_assoc()) {

$totalprice = $row["qty"] * $row["price"];

$bill+=$totalprice;
$qtY+=$row["qty"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout</title>
  <link rel="stylesheet" href="orderbuy.css">
</head>
<body>
  <div class="checkout-container">
    <h2>Checkout</h2>
    <form action="checkout.php" method="POST">

      <label>Price (₹):</label>
      <input type="number" name="price" value="<?php echo $bill; ?>" readonly><br><br>

      <label>Quantity:</label>
      <input type="number" name="quantity" value="<?php echo $qtY; ?>"readonly><br><br>

      <label>Payment Method:</label>
      <form action="checkout.php" method="POST">
      <select name="payment_method" required>
        <option value="COD">Cash on Delivery</option>
        <option value="Online">Online Payment</option>
      </select><br><br>
      
      <button type="submit">Place Order</button>
        </form>
 
  </div>
</body>
</html>



