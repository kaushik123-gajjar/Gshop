<?php
session_start();
$name   = $_POST["name"];
$price  = $_POST["price"];
$qty    = $_POST["qty"];
$image  = $_POST["image"];
$connect = new mysqli("localhost","root","","store");
$stmt = $connect->prepare("INSERT INTO product(name,price,qty,image) VALUES(?,?,?,?)");
$stmt->bind_param("ssss",$name,$price,$qty,$image);
$stmt->execute();
$user_id    = $_SESSION['user_id']; 
$qty  = $_POST['qty'];
$stmt = $connect->prepare("INSERT INTO cart(user_id, qty) VALUES(?,?)");
$stmt->bind_param("ii",$user_id,$qty);
if($user_id == 0){
    header("location:loginpage.php?msg=Please Login First");
  
}
else{
    $stmt->execute();
    header("location:index.php?msg=Cart Added Successfully");
}


?>
