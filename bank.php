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
   

      <label>Price (₹):</label>
      <input type="number" name="price" value="<?php echo $bill; ?>" readonly><br><br>

      <label>Quantity:</label>
      <input type="number" name="quantity" value="<?php echo $qtY; ?>"readonly><br><br>
     
  <title>Card Payment</title>
  <link rel="stylesheet" href="card_payment.css">
</head>
<body>
  <div class="payment-container">
    <h2>Credit / Debit Card Payment</h2>
      <form action="paymentsuccesfull.php" method="get">
      <label for="cardName">Cardholder Name</label>
      <input type="text" id="cardName" name="cardName" placeholder="Enter cardholder name" required>

      <label for="cardNumber">Card Number</label>
      <input type="text" id="cardNumber" name="cardNumber" placeholder="xxxx xxxx xxxx xxxx" maxlength="16" required>

      <div class="row">
        <div class="column">
          <label for="expiry">Expiry Date</label>
          <input type="text" id="expiry" name="expiry" placeholder="MM/YY" maxlength="5" required>
        </div>
        <div class="column">
          <label for="cvv">CVV</label>
          <input type="password" id="cvv" name="cvv" placeholder="***" maxlength="3" required>
        </div>
      </div>

      <button type="submit"> Pay Now</button>
    </form>
  </div>
  </div>
</body>
</html>



