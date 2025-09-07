<?php
session_start();
if (!isset($_SESSION['user_id'])) {
header("Location: login.php");
exit();
}
$user_id = $_SESSION['user_id'];
$connect = new mysqli("localhost", "root", "", "store");
$stmt = $connect->prepare("DELETE FROM user WHERE user_id=?");
$stmt->bind_param("i", $user_id);
if ($stmt->execute()) {
session_unset();
session_destroy();
header("Location: index.php?msg=Logout  successfully");
exit();
} else {
echo "Error deleting account.";
}
?>
