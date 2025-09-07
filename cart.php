<?php
session_start();
$connect = new mysqli("localhost", "root", "", "store");
$stmt = $connect->query("SELECT * FROM product");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cart</title>
<link rel="stylesheet" href="cart.css">
</head>
<body>
<a href="index.php" class="back-btn">← Back</a>
<h2 style="text-align:center;">Cart Products</h2>
<?php  
if(isset($_GET["msg"])){
    $msg=$_GET["msg"];
    echo "<p style=color:green;text-align:center;>".htmlspecialchars($msg)."</p>";
} 
?>
<table>
<tr>
<th>ID</th>
<th>PRODUCT IMAGE</th>
<th>NAME</th>
<th>PRICE</th>
<th>QTY</th>
<th>TOTAL PRICE</th>
<th>OPRATION</th>
</tr>
<?php
$bill=0;
 while ($row = $stmt->fetch_assoc()): 

$totalprice = $row["qty"] * $row["price"];

$bill+=$totalprice;
?>
<tr>
<td><?php echo htmlspecialchars($row['id']); ?></td>
<td>
<img src="<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image" width="100" height="100">
</td>
<td><?php echo htmlspecialchars($row['name']); ?></td>
<td>₹<?php echo htmlspecialchars($row['price']); ?></td>
<td><?php echo htmlspecialchars($row['qty']); ?></td>
<td>₹<?php echo number_format($totalprice, 2); ?></td>
<td>
    <form action="delete.php" method="get">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
        <button class=delete-button>Delete-Product</button>
    </form>
</td>
</tr>
<?php endwhile; ?>
</table>
<div class="buy-section">
    <?php echo "<div class='total-price'>₹" . number_format($bill, 2) . "</div>"; ?>
    <form action="orderbuy.php" method="post">
        <input type="hidden" name="total_price" value="<?php echo $bill; ?>">
        <button type="submit">Buy-All</button>
    </form>
</div>
</body>
</html>
