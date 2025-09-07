<?php
session_start();
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$user_id = intval($_SESSION["user_id"]);
$stmt = $connect->prepare("SELECT username, lastname, password, email, mobile, city, country, file1 FROM user WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $lastname, $password, $email, $mobile, $city, $country, $File1);
$stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
<title>Update Profile</title>
<link rel="stylesheet" href="upform.css">
</head>
<body>
<div class="form-container">
<form action="updateprofile.php" method="post" enctype="multipart/form-data">

<label>ID:</label>
<input type="text" name="id" value="<?php echo htmlspecialchars($user_id); ?>" readonly>

<div class="images">
<label>Profile Image 1:</label>
<img src="image/<?php echo htmlspecialchars($image1); ?>" width="100" height="100" alt="Profile Image 1">
<input type="file" name="image1" accept="image/*" value="$image1"> <br>  
</div>

<label>Username:</label>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">

<label>Last Name:</label>
<input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>">

<label>Password:</label>
<input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>">

<label>Email:</label>
<input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">

<label>Mobile:</label>
<input type="text" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>">

<label>City:</label>
<input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>">

<label>Country:</label>
<input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>">

<button type="submit">UPDATE</button>
</form>
</div>
</body>
</html>
