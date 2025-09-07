<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location:singuppage.php?msg=Please signup or login first");
    exit();
}
?>
<?php

$host = "localhost";
$user = "root";
$pass = null;
$database = "store";
$connect = new mysqli($host, $user, $pass, $database);
$user_id = intval($_SESSION["user_id"]);
$stmt = $connect->prepare("SELECT username, lastname, password, email, mobile, city, country,file1 FROM user  WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($username, $lastname, $password, $email, $mobile, $city, $country, $File1);
$stmt->fetch();
?>
<?php echo '<button><a href="index.php">' . htmlspecialchars('back') . '</a></button>'; ?>
<?php
if (isset($_GET['msg'])) {
echo "<p class='msg' >" . htmlspecialchars($_GET['msg']) . "</p>";
}
?>
  <div class="profile-header">
    <h1>Hello, <?php echo htmlspecialchars($username); ?></h1>
  
  </div>
<!DOCTYPE html>
<html>
<head>
<title>Your Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
<form>

<label>ID:</label>
<input type="text" name="id" value="<?php echo htmlspecialchars($user_id); ?>" readonly>

<div class="images">
<label>Profile Image</label>
<img src="image/<?php echo htmlspecialchars($File1); ?>" width="100" height="100" alt="Profile Image 1"> <br>
</div>

<label>Username:</label>
<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>

<label>Last Name:</label>
<input type="text" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>"readonly>

<label>Password:</label>
<input type="password" name="password" value="<?php echo htmlspecialchars($password); ?>"readonly>

<label>Email:</label>
<input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>"readonly>

<label>Mobile:</label>
<input type="text" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>"readonly>

<label>City:</label>
<input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>"readonly>

<label>Country:</label>
<input type="text" name="country" value="<?php echo htmlspecialchars($country); ?>"readonly>
</form>
<form action='updateprofileform.php' method='get' style='display:inline;'>
 <input type='hidden' name='user_id' value="<?php echo htmlspecialchars($user_id); ?>">
<input type='submit' value='Update' class='update-button'>
</form>
<form action='logout.php' method='post' style='display:inline;'>
 <input type='hidden' name='user_id' value="<?php echo htmlspecialchars($user_id); ?>">
<input type='submit' id="logout" value="Logout" class='logout'>
</div>
</body>
<script src="l.js"></script>
</html>
