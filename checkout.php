<?php
session_start();
$connect = new mysqli("localhost", "root", "", "store");
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$payment_method = $_POST['payment_method'];
$total = $price;
if ($payment_method == "COD") {  

session_unset();
session_destroy();

echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Confirmation</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f4f4f4;
      font-family: Arial, sans-serif;
    }
    .checkmark {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: block;
      stroke-width: 5;
      stroke: #4CAF50;
      stroke-miterlimit: 10;
      box-shadow: inset 0px 0px 0px #4CAF50;
      animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
    }
    .checkmark__circle {
      stroke-dasharray: 166;
      stroke-dashoffset: 166;
      stroke-width: 4;
      stroke-miterlimit: 10;
      stroke: #4CAF50;
      fill: none;
      animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
    }
    .checkmark__check {
      transform-origin: 50% 50%;
      stroke-dasharray: 48;
      stroke-dashoffset: 48;
      animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
    }
    @keyframes stroke {
      100% { stroke-dashoffset: 0; }
    }
    @keyframes scale {
      0%, 100% { transform: none; }
      50% { transform: scale3d(1.1, 1.1, 1); }
    }
    @keyframes fill {
      100% { box-shadow: inset 0px 0px 0px 40px #4CAF50; }
    }
    h2 {
      margin-top: 20px;
      color: #333;
    }
    p {
      color: #555;
    }
  </style>
</head>
<body>
  <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
    <path class="checkmark__check" fill="none" d="M14 27l7 7 16-16"/>
  </svg>
  <h2>✅ Order Placed Successfully</h2>
  <p>Payment Method:cash on delivery</p>
</body>
</html>
';

} else {
    $_SESSION['order_total'] = $total;
    $_SESSION['order_qty'] = $quantity;
    header("Location: bank.php");
    exit;
}
?>
