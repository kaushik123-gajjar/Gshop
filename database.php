<?php
$folder = "image/";
    $File1 = $_FILES["file1"]["name"];
    $temp1 = $_FILES["file1"]["tmp_name"];
    $target1 = $folder . basename($File1);
    move_uploaded_file($temp1, $target1);
$username = $_POST["username"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$email    = $_POST["email"];
$mobile   = $_POST["mobile"];
$city     = $_POST["city"];
$country  = $_POST["country"];
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$stmt = $connect->prepare("INSERT INTO user (username, lastname, password, email, mobile, city, country, file1) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $username, $lastname, $password, $email, $mobile, $city, $country, $File1);
if ($stmt->execute()) {
    $stmt2 = $connect->prepare("INSERT INTO history (username, lastname, password, email, mobile, city, country, file1) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("ssssssss", $username, $lastname, $password, $email, $mobile, $city, $country, $File1);
    $stmt2->execute();
    header("Location: loginpage.php?msg=Signup successful");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

?>
