<?php
$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$user_id = $_GET["user_id"];
$stmt = $connect->prepare("SELECT username, lastname, password, email, mobile, city, country,file1 FROM user WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $lastname, $password, $email, $mobile, $city, $country, $File1);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>User Details</title>
  <link rel="stylesheet" href="show.css">
</head>
<body>

<div class="form-container">

  <h2>User Profile</h2>

  <div class="images">
    <img src="image/<?php echo htmlspecialchars($File1); ?>" width="100" height="100" alt="Profile Image 1">
    
  </div>

  <label>ID:</label>
  <input type="text" name="id" value="<?php echo htmlspecialchars($user_id); ?>" readonly>

  <label>Username:</label>
  <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>

  <label>Last Name:</label>
  <input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>" readonly>

  <label>Password:</label>
  <input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>" readonly>

  <label>Email:</label>
  <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>

  <label>Mobile:</label>
  <input type="text" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>" readonly>

  <label>City:</label>
  <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>" readonly>

  <label>Country:</label>
  <input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>" readonly>

</div>

</body>
</html>
