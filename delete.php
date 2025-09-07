<?php
session_start();
$id=$_GET["id"];
$connect=new mysqli("localhost","root","","store");
$stmt=$connect->prepare("DELETE FROM product WHERE id=?");
$stmt->bind_param("i", $id);
if($stmt->execute()){
    header("location:cart.php?msg=Item Deleted Successfully");
}
session_abort();
session_unset();
?>