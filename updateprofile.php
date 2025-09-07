<?php
session_start();
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$user_id = intval($_POST["user_id"]);
$username = $_POST["username"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$city = $_POST["city"];
$country = $_POST["country"];
$folder = "image/";
$result = $connect->query("SELECT file1 FROM user WHERE user_id = $user_id");
while($row = $result->fetch_assoc()){
if (!empty($_FILES["file1"]["name"])) {
$File1 = $_FILES["file1"]["name"];
$tmp1 = $_FILES["file1"]["tmp_name"];
move_uploaded_file($tmp1, $folder . basename($File1));
} else {
$File1 = $row["file1"];
}
}
$stmt = $connect->prepare("UPDATE user SET username=?, lastname=?, password=?, email=?, mobile=?, city=?, country=?, file1=? WHERE user_id=?");
$stmt->bind_param("ssssssssi", $username, $lastname, $password, $email, $mobile, $city, $country, $File1, $user_id);
if ($stmt->execute()) {
header("Location: userprofile.php?msg=Update Successfully");
exit;
}
?>
