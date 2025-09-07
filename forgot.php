<?php
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$user_id = $_POST["user_id"]; 
$password = $_POST["password"];
$stmt = $connect->prepare("UPDATE user SET password = ? WHERE user_id = ?");
$stmt->bind_param("si", $password, $user_id);
if ($stmt->execute()) {
header("Location: loginpage.php?msg=Password updated successfully");
} else {
header("Location: forgotform.php?user_id=$user_id&msg=Error updating password");
}
$stmt->close();
?>
