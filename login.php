<?php
session_start();
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$lusername = $_POST['username'];
$lpassword = $_POST['password'];
$found = false; 
$stmt = $connect->prepare("SELECT * FROM user WHERE username=? AND password=?");
$stmt->bind_param("ss", $lusername, $lpassword);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $_SESSION["user_id"] = $row["user_id"];
    $_SESSION["username"] = $row["username"];
    $found = true;
}
if ($found===true) {
    header("Location:index.php?msg=Login successfully");
} else {
    header("Location: loginpage.php?msg=Invalid username or password");
}
?>
